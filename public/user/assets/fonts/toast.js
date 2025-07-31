console.log("Toast script loaded");

class ToastSystem {
    constructor() {
        this.toasts = new Map();
        this.containers = new Map();
        this.idCounter = 0;
        this.defaultOptions = {
            duration: 4000,
            position: 'top-right',
            variant: 'bordered', // 'bordered' or 'filled'
            showProgress: true,
            pauseOnHover: true,
            onClick: null,
            onClose: null
        };
    }

    // Create or get container for position
    // Replace getContainer() method with this:
getContainer(position) {
    if (!this.containers.has(position)) {
        const container = document.createElement('div');
        container.className = `toast-container ${position}`;
        container.style.cssText = `
            position: fixed;
            z-index: 99999;
            display: flex;
            flex-direction: column;
            gap: 10px;
        `;

        // Position styles
        if (position.includes('top')) {
            container.style.top = '20px';
        } else {
            container.style.bottom = '20px';
        }

        if (position.includes('left')) {
            container.style.left = '20px';
        } else if (position.includes('right')) {
            container.style.right = '20px';
        } else {
            container.style.left = '50%';
            container.style.transform = 'translateX(-50%)';
        }

        document.body.appendChild(container);
        this.containers.set(position, container);
    }
    return this.containers.get(position);
}

    // Generate unique ID
    generateId() {
        return ++this.idCounter;
    }

    // Get Remix Icon class for toast type
    getIcon(type) {
        const icons = {
            success: 'ri-checkbox-circle-line',
            error: 'ri-close-circle-line',
            warning: 'ri-alert-line',
            info: 'ri-information-line'
        };
        return icons[type] || icons.info;
    }

    // Create toast element
    createToast(title, message, type, options) {
        const toast = document.createElement('div');
        const id = this.generateId();

        // Determine if we have both title and message
        const hasTitle = title && message;
        const displayTitle = hasTitle ? title : null;
        const displayMessage = hasTitle ? message : (title || message);

        const variantClass = options.variant === 'filled' ? 'filled' : '';
        toast.className = `toast ${type} ${variantClass} toast-enter`;

        toast.innerHTML = `
                    <div class="toast-icon">
                        <i class="${this.getIcon(type)}"></i>
                    </div>
                    <div class="toast-content">
                        ${displayTitle ? `<div class="toast-title">${displayTitle}</div>` : ''}
                        <div class="toast-message">${displayMessage}</div>
                    </div>
                    <button class="toast-close" aria-label="Close notification">
                        <i class="ri-close-line"></i>
                    </button>
                    ${options.showProgress && options.duration > 0 ? `<div class="toast-progress"></div>` : ''}
                `;

        // Store toast reference
        this.toasts.set(id, { element: toast, options });

        // Add event listeners
        this.setupToastEvents(toast, id, options);

        // Add progress bar animation
        if (options.showProgress && options.duration > 0) {
            const progress = toast.querySelector('.toast-progress');
            if (progress) {
                progress.style.animationDuration = `${options.duration}ms`;
            }
        }

        return { toast, id };
    }

    // Setup event listeners for toast
    setupToastEvents(toast, id, options) {
        const closeBtn = toast.querySelector('.toast-close');
        let timeoutId = null;
        let remainingTime = options.duration;
        let startTime = Date.now();

        // Close button click
        closeBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            this.dismiss(id);
        });

        // Toast click
        if (options.onClick) {
            toast.addEventListener('click', (e) => {
                // Don't trigger if clicking close button
                if (!e.target.closest('.toast-close')) {
                    options.onClick();
                }
            });
        }

        // Auto dismiss
        if (options.duration > 0) {
            const startDismiss = () => {
                timeoutId = setTimeout(() => this.dismiss(id), remainingTime);
                startTime = Date.now();
            };

            const pauseDismiss = () => {
                if (timeoutId) {
                    clearTimeout(timeoutId);
                    remainingTime -= Date.now() - startTime;
                }
            };

            startDismiss();

            if (options.pauseOnHover) {
                toast.addEventListener('mouseenter', pauseDismiss);
                toast.addEventListener('mouseleave', startDismiss);
            }
        }
    }

    // Show toast - supports both old and new signature
   // Replace your show() method with this:
show(title, message, type, options = {}) {
    const mergedOpts = { ...this.defaultOptions, ...options };
    const container = this.getContainer(mergedOpts.position);
    const { toast, id } = this.createToast(title, message, type, mergedOpts);

    // Forcefully set styles
    toast.style.display = 'flex';
    toast.style.opacity = '0'; // Start invisible for animation

    container.appendChild(toast);

    // Trigger animation
    requestAnimationFrame(() => {
        toast.style.opacity = '1';
        toast.style.transform = 'translateY(0)';
    });

    return id;
}

    // Dismiss toast
    dismiss(id) {
        const toastData = this.toasts.get(id);
        if (!toastData) return;

        const { element: toast, options } = toastData;

        // Trigger exit animation
        toast.classList.add('toast-exit', 'toast-exit-active');
        toast.classList.remove('toast-enter-active');

        // Remove after animation
        setTimeout(() => {
            if (toast.parentNode) {
                toast.parentNode.removeChild(toast);
            }
            this.toasts.delete(id);

            // Call onClose callback
            if (options.onClose) {
                options.onClose();
            }
        }, 300);
    }

    // Dismiss all toasts
    dismissAll() {
        this.toasts.forEach((_, id) => this.dismiss(id));
    }

    // Convenience methods - support both single message and title + message
    success(titleOrMessage, messageOrOptions, userOptions) {
        if (typeof messageOrOptions === 'string') {
            return this.show(titleOrMessage, messageOrOptions, 'success', userOptions);
        } else {
            return this.show(titleOrMessage, 'success', messageOrOptions);
        }
    }

    error(titleOrMessage, messageOrOptions, userOptions) {
        if (typeof messageOrOptions === 'string') {
            return this.show(titleOrMessage, messageOrOptions, 'error', userOptions);
        } else {
            return this.show(titleOrMessage, 'error', messageOrOptions);
        }
    }

    warning(titleOrMessage, messageOrOptions, userOptions) {
        if (typeof messageOrOptions === 'string') {
            return this.show(titleOrMessage, messageOrOptions, 'warning', userOptions);
        } else {
            return this.show(titleOrMessage, 'warning', messageOrOptions);
        }
    }

    info(titleOrMessage, messageOrOptions, userOptions) {
        if (typeof messageOrOptions === 'string') {
            return this.show(titleOrMessage, messageOrOptions, 'info', userOptions);
        } else {
            return this.show(titleOrMessage, 'info', messageOrOptions);
        }
    }
}

// Create global toast instance
if (!window.toast) {
    // window.ToastSystem = ToastSystem; // Make class available globally
    window.toast = new ToastSystem()
}



console.log("ToastSystem exists:", typeof ToastSystem); // Should show "function"
