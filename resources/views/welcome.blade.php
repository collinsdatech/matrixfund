@extends('layouts.main')
@section('content')
<main class="bg-matrix-dark min-h-screen w-full overflow-hidden ltr">
    <div class="relative w-full z-50 bg-matrix-dark-lighter/90 backdrop-blur-md border-b border-matrix-green/20 shadow-md h-[68px]">
        <div class="h-full overflow-hidden">
            <div class="tradingview-widget-container" style="width: 100%; height: 72px;">
                <iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://www.tradingview-widget.com/embed-widget/ticker-tape/?locale=en#%7B%22symbols%22%3A%5B%7B%22proName%22%3A%22FOREXCOM%3AEURUSD%22%2C%22title%22%3A%22EUR%2FUSD%22%7D%2C%7B%22proName%22%3A%22FOREXCOM%3AGBPUSD%22%2C%22title%22%3A%22GBP%2FUSD%22%7D%2C%7B%22proName%22%3A%22FOREXCOM%3AUSDJPY%22%2C%22title%22%3A%22USD%2FJPY%22%7D%2C%7B%22proName%22%3A%22FOREXCOM%3AAUDUSD%22%2C%22title%22%3A%22AUD%2FUSD%22%7D%2C%7B%22proName%22%3A%22FOREXCOM%3AUSDCAD%22%2C%22title%22%3A%22USD%2FCAD%22%7D%2C%7B%22proName%22%3A%22FOREXCOM%3AUSDCHF%22%2C%22title%22%3A%22USD%2FCHF%22%7D%2C%7B%22proName%22%3A%22FOREXCOM%3ANZDUSD%22%2C%22title%22%3A%22NZD%2FUSD%22%7D%5D%2C%22colorTheme%22%3A%22dark%22%2C%22isTransparent%22%3Atrue%2C%22displayMode%22%3A%22adaptive%22%2C%22width%22%3A%22100%25%22%2C%22height%22%3A44%2C%22utm_source%22%3A%22www.matrixtradersfund.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22ticker-tape%22%2C%22page-uri%22%3A%22www.matrixtradersfund.com%2F%22%7D" title="ticker tape TradingView widget" lang="en" style="user-select: none; box-sizing: border-box; display: block; height: 72px; width: 100%;"></iframe>
                <style>
                    .tradingview-widget-copyright {
                    font-size: 13px !important;
                    line-height: 32px !important;
                    text-align: center !important;
                    vertical-align: middle !important;
                    /* @mixin sf-pro-display-font; */
                    font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif !important;
                    color: #B2B5BE !important;
                    }
                    .tradingview-widget-copyright .blue-text {
                    color: #2962FF !important;
                    }
                    .tradingview-widget-copyright a {
                    text-decoration: none !important;
                    color: #B2B5BE !important;
                    }
                    .tradingview-widget-copyright a:visited {
                    color: #B2B5BE !important;
                    }
                    .tradingview-widget-copyright a:hover .blue-text {
                    color: #1E53E5 !important;
                    }
                    .tradingview-widget-copyright a:active .blue-text {
                    color: #1848CC !important;
                    }
                    .tradingview-widget-copyright a:visited .blue-text {
                    color: #2962FF !important;
                    }
                </style>
            </div>
        </div>
    </div>
    <div class="relative w-full z-30 py-3 bg-matrix-dark-lighter/90 backdrop-blur-md border-b border-matrix-green/20 flex justify-between items-center px-4">
        <a href="#home" class="flex items-center">
            <div class="text-white text-2xl font-bold">
                <div class="flex items-center "><img src="/uploads/2dfc5b21-268f-4bec-9836-149bd3a71c03.png" alt="MatrixTraders Fund" class="h-8 md:h-10 hidden dark:block light:hidden"><img src="/uploads/c2494745-0685-4c57-adf6-7ed859d21856.png" alt="MatrixTraders Fund" class="h-8 md:h-10 dark:hidden light:block"></div>
            </div>
        </a>
        <div class="relative"><button class="flex items-center space-x-1 text-white hover:text-matrix-green transition-colors" aria-haspopup="true" aria-expanded="false"><span class="text-2xl">🇬🇧</span><span class="hidden md:inline ml-2">English</span></button></div>
    </div>
    <div class="fixed bottom-0 left-0 z-50 w-full h-16 bg-matrix-dark-lighter backdrop-blur-md border-t border-matrix-green/20 md:hidden">
        <div class="grid h-full grid-cols-5">
            <a href="#home" class="flex flex-col items-center justify-center text-gray-300 hover:text-matrix-green transition-colors duration-300 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house">
                    <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path>
                    <path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                </svg>
                <span class="text-xs mt-1">Home</span>
            </a>
            <a href="#funding-options" class="flex flex-col items-center justify-center text-gray-300 hover:text-matrix-green transition-colors duration-300 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chart-no-axes-column">
                    <line x1="18" x2="18" y1="20" y2="10"></line>
                    <line x1="12" x2="12" y1="20" y2="4"></line>
                    <line x1="6" x2="6" y1="20" y2="14"></line>
                </svg>
                <span class="text-xs mt-1">Funding Options</span>
            </a>
            <button class="flex flex-col items-center justify-center ">
                <div class="rounded-full bg-matrix-green p-3 -mt-6">
                    <div class="h-5 w-5"><img src="/uploads/34e50189-179f-423b-bf9c-a4ea1bfa5306.png" alt="MatrixTraders Icon" class="h-full w-auto"></div>
                </div>
                <span class="text-xs mt-1 text-matrix-green">Get Funded</span>
            </button>
            <button class="flex flex-col items-center justify-center text-gray-300 hover:text-matrix-green transition-colors duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user">
                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
                <span class="text-xs mt-1">Sign In</span>
            </button>
            <button class="flex flex-col items-center justify-center text-gray-300 hover:text-matrix-green transition-colors duration-300 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu">
                    <line x1="4" x2="20" y1="12" y2="12"></line>
                    <line x1="4" x2="20" y1="6" y2="6"></line>
                    <line x1="4" x2="20" y1="18" y2="18"></line>
                </svg>
                <span class="text-xs mt-1">Menu</span>
            </button>
        </div>
    </div>
    <div style="">
        <section id="home" class="relative min-h-screen pt-5 flex items-center overflow-hidden">
            <div class="absolute inset-0 z-0">
                <div class="absolute inset-0" id="tsparticles">
                    <canvas style="width: 100% !important; height: 100% !important; position: fixed !important; z-index: 0 !important; top: 0px !important; left: 0px !important; pointer-events: none;" data-generated="false" aria-hidden="true" width="1170" height="2532"></canvas>
                </div>
            </div>
            <div class="absolute inset-0 bg-matrix-gradient opacity-70 z-[1]"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[300px] h-[300px] sm:w-[500px] sm:h-[500px] md:w-[700px] md:h-[700px] lg:w-[800px] lg:h-[800px] rounded-full bg-matrix-glow z-[1]"></div>
            <div class="container mx-auto px-4 md:px-6 relative z-10 py-8 md:py-12">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-12 items-center">
                    <div class="space-y-6 md:space-y-8 animate-fade-in text-center lg:text-left" style="animation-delay: 0.2s;">
                        <div>
                            <div class="chip">Proprietary Trading Firm</div>
                            <h1 class="text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold text-white leading-tight mb-3 md:mb-4">Get up to <span class="matrix-gradient-text">$5,000,000</span> <br class="hidden sm:inline">in Trading Capital</h1>
                            <p class="text-base md:text-lg lg:text-xl text-gray-300 mb-6 md:mb-8 max-w-lg mx-auto lg:mx-0">Start trading with MatrixTraders Fund's capital. Trade traditional Forex markets or explore high-leverage <span class="text-matrix-yellow font-semibold">Synthetic Indices</span> with up to 1:1000 leverage. Enjoy lenient drawdowns and up to 90% profit sharing on all your trades.</p>
                        </div>
                        <div class="flex flex-row gap-2 sm:gap-4 justify-center lg:justify-start">
                            <a href="#get-funded" class="btn-matrix-primary flex items-center justify-center text-sm sm:text-base px-3 sm:px-6 py-2 sm:py-3">
                                <span>Get Funded Now</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right ml-1 sm:ml-2 h-4 w-4 sm:h-5 sm:w-5">
                                    <path d="m9 18 6-6-6-6"></path>
                                </svg>
                            </a>
                            <a href="#how-it-works" class="btn-matrix-outline flex items-center justify-center text-sm sm:text-base px-3 sm:px-6 py-2 sm:py-3">Learn How It Works</a>
                        </div>
                    </div>
                    <div class="space-y-4 md:space-y-6 animate-fade-in" style="animation-delay: 0.4s;">
                        <div class="matrix-card flex items-start space-x-4 animate-fade-in" style="animation-delay: 0.6s;">
                            <div class="p-3 rounded-full bg-matrix-dark-light flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield w-6 h-6 text-matrix-green">
                                    <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-white mb-1">Lenient Drawdowns</h3>
                                <p class="text-sm md:text-base text-gray-300">Trade with comfort knowing our rules are designed for real traders, including flexible Synthetic Indices trading.</p>
                            </div>
                        </div>
                        <div class="matrix-card flex items-start space-x-4 animate-fade-in" style="animation-delay: 0.8s;">
                            <div class="p-3 rounded-full bg-matrix-dark-light flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chart-pie w-6 h-6 text-matrix-yellow">
                                    <path d="M21 12c.552 0 1.005-.449.95-.998a10 10 0 0 0-8.953-8.951c-.55-.055-.998.398-.998.95v8a1 1 0 0 0 1 1z"></path>
                                    <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-white mb-1">High Profit Split</h3>
                                <p class="text-sm md:text-base text-gray-300">Enjoy up to 90% profit sharing on both Forex and Synthetic Indices trades, among the highest in the industry.</p>
                            </div>
                        </div>
                        <div class="matrix-card flex items-start space-x-4 animate-fade-in" style="animation-delay: 1s;">
                            <div class="p-3 rounded-full bg-matrix-dark-light flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up w-6 h-6 text-matrix-green-light">
                                    <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                    <polyline points="16 7 22 7 22 13"></polyline>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-white mb-1">High Leverage Trading</h3>
                                <p class="text-sm md:text-base text-gray-300">Access up to 1:1000 leverage on Synthetic Indices for maximum trading opportunities and rapid account growth.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="bg-matrix-dark-lighter border-y border-matrix-green/20 py-3 relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-r from-matrix-dark-lighter via-matrix-dark/50 to-matrix-dark-lighter opacity-80 z-0"></div>
            <div class="relative w-full overflow-hidden">
                <div class="flex whitespace-nowrap min-w-full gap-8 px-4 overflow-x-hidden">
                    <div class="flex items-center text-sm font-medium text-white/80 hover:text-matrix-green transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 text-matrix-yellow mr-2">
                            <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                        </svg>
                        <span>Top-Rated Prop Firm Payouts</span>
                    </div>
                    <div class="flex items-center text-sm font-medium text-white/80 hover:text-matrix-green transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award w-4 h-4 text-matrix-yellow mr-2">
                            <path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"></path>
                            <circle cx="12" cy="8" r="6"></circle>
                        </svg>
                        <span>Top-Rated Prop Firm Experience</span>
                    </div>
                    <div class="flex items-center text-sm font-medium text-white/80 hover:text-matrix-green transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check w-4 h-4 text-matrix-green mr-2">
                            <path d="M20 6 9 17l-5-5"></path>
                        </svg>
                        <span>Swap Free Available</span>
                    </div>
                    <div class="flex items-center text-sm font-medium text-white/80 hover:text-matrix-green transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up w-4 h-4 text-matrix-green mr-2">
                            <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                            <polyline points="16 7 22 7 22 13"></polyline>
                        </svg>
                        <span>Industry's Tightest Spreads</span>
                    </div>
                    <div class="flex items-center text-sm font-medium text-white/80 hover:text-matrix-green transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-infinity w-4 h-4 text-matrix-yellow mr-2">
                            <path d="M12 12c-2-2.67-4-4-6-4a4 4 0 1 0 0 8c2 0 4-1.33 6-4Zm0 0c2 2.67 4 4 6 4a4 4 0 0 0 0-8c-2 0-4 1.33-6 4Z"></path>
                        </svg>
                        <span>Unlimited Scaling Plan</span>
                    </div>
                    <div class="flex items-center text-sm font-medium text-white/80 hover:text-matrix-green transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-globe w-4 h-4 text-matrix-green mr-2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                            <path d="M2 12h20"></path>
                        </svg>
                        <span>Unlimited Days</span>
                    </div>
                    <div class="flex items-center text-sm font-medium text-white/80 hover:text-matrix-green transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trophy w-4 h-4 text-matrix-yellow mr-2">
                            <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"></path>
                            <path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"></path>
                            <path d="M4 22h16"></path>
                            <path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"></path>
                            <path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"></path>
                            <path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"></path>
                        </svg>
                        <span>Up To 90% Profit Split</span>
                    </div>
                    <div class="flex items-center text-sm font-medium text-white/80 hover:text-matrix-green transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield w-4 h-4 text-matrix-green mr-2">
                            <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                        </svg>
                        <span>Lenient Drawdowns</span>
                    </div>
                    <div class="flex items-center text-sm font-medium text-white/80 hover:text-matrix-green transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap w-4 h-4 text-matrix-yellow mr-2">
                            <path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"></path>
                        </svg>
                        <span>Same Day Payout</span>
                    </div>
                    <div class="flex items-center text-sm font-medium text-white/80 hover:text-matrix-green transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 text-matrix-yellow mr-2">
                            <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                        </svg>
                        <span>Top-Rated Prop Firm Payouts</span>
                    </div>
                    <div class="flex items-center text-sm font-medium text-white/80 hover:text-matrix-green transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award w-4 h-4 text-matrix-yellow mr-2">
                            <path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"></path>
                            <circle cx="12" cy="8" r="6"></circle>
                        </svg>
                        <span>Top-Rated Prop Firm Experience</span>
                    </div>
                    <div class="flex items-center text-sm font-medium text-white/80 hover:text-matrix-green transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check w-4 h-4 text-matrix-green mr-2">
                            <path d="M20 6 9 17l-5-5"></path>
                        </svg>
                        <span>Swap Free Available</span>
                    </div>
                    <div class="flex items-center text-sm font-medium text-white/80 hover:text-matrix-green transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up w-4 h-4 text-matrix-green mr-2">
                            <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                            <polyline points="16 7 22 7 22 13"></polyline>
                        </svg>
                        <span>Industry's Tightest Spreads</span>
                    </div>
                    <div class="flex items-center text-sm font-medium text-white/80 hover:text-matrix-green transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-infinity w-4 h-4 text-matrix-yellow mr-2">
                            <path d="M12 12c-2-2.67-4-4-6-4a4 4 0 1 0 0 8c2 0 4-1.33 6-4Zm0 0c2 2.67 4 4 6 4a4 4 0 0 0 0-8c-2 0-4 1.33-6 4Z"></path>
                        </svg>
                        <span>Unlimited Scaling Plan</span>
                    </div>
                    <div class="flex items-center text-sm font-medium text-white/80 hover:text-matrix-green transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-globe w-4 h-4 text-matrix-green mr-2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                            <path d="M2 12h20"></path>
                        </svg>
                        <span>Unlimited Days</span>
                    </div>
                    <div class="flex items-center text-sm font-medium text-white/80 hover:text-matrix-green transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trophy w-4 h-4 text-matrix-yellow mr-2">
                            <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"></path>
                            <path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"></path>
                            <path d="M4 22h16"></path>
                            <path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"></path>
                            <path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"></path>
                            <path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"></path>
                        </svg>
                        <span>Up To 90% Profit Split</span>
                    </div>
                    <div class="flex items-center text-sm font-medium text-white/80 hover:text-matrix-green transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield w-4 h-4 text-matrix-green mr-2">
                            <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                        </svg>
                        <span>Lenient Drawdowns</span>
                    </div>
                    <div class="flex items-center text-sm font-medium text-white/80 hover:text-matrix-green transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap w-4 h-4 text-matrix-yellow mr-2">
                            <path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"></path>
                        </svg>
                        <span>Same Day Payout</span>
                    </div>
                    <div class="flex items-center text-sm font-medium text-white/80 hover:text-matrix-green transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 text-matrix-yellow mr-2">
                            <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                        </svg>
                        <span>Top-Rated Prop Firm Payouts</span>
                    </div>
                    <div class="flex items-center text-sm font-medium text-white/80 hover:text-matrix-green transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award w-4 h-4 text-matrix-yellow mr-2">
                            <path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"></path>
                            <circle cx="12" cy="8" r="6"></circle>
                        </svg>
                        <span>Top-Rated Prop Firm Experience</span>
                    </div>
                    <div class="flex items-center text-sm font-medium text-white/80 hover:text-matrix-green transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check w-4 h-4 text-matrix-green mr-2">
                            <path d="M20 6 9 17l-5-5"></path>
                        </svg>
                        <span>Swap Free Available</span>
                    </div>
                    <div class="flex items-center text-sm font-medium text-white/80 hover:text-matrix-green transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up w-4 h-4 text-matrix-green mr-2">
                            <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                            <polyline points="16 7 22 7 22 13"></polyline>
                        </svg>
                        <span>Industry's Tightest Spreads</span>
                    </div>
                    <div class="flex items-center text-sm font-medium text-white/80 hover:text-matrix-green transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-infinity w-4 h-4 text-matrix-yellow mr-2">
                            <path d="M12 12c-2-2.67-4-4-6-4a4 4 0 1 0 0 8c2 0 4-1.33 6-4Zm0 0c2 2.67 4 4 6 4a4 4 0 0 0 0-8c-2 0-4 1.33-6 4Z"></path>
                        </svg>
                        <span>Unlimited Scaling Plan</span>
                    </div>
                    <div class="flex items-center text-sm font-medium text-white/80 hover:text-matrix-green transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-globe w-4 h-4 text-matrix-green mr-2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                            <path d="M2 12h20"></path>
                        </svg>
                        <span>Unlimited Days</span>
                    </div>
                    <div class="flex items-center text-sm font-medium text-white/80 hover:text-matrix-green transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trophy w-4 h-4 text-matrix-yellow mr-2">
                            <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"></path>
                            <path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"></path>
                            <path d="M4 22h16"></path>
                            <path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"></path>
                            <path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"></path>
                            <path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"></path>
                        </svg>
                        <span>Up To 90% Profit Split</span>
                    </div>
                    <div class="flex items-center text-sm font-medium text-white/80 hover:text-matrix-green transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield w-4 h-4 text-matrix-green mr-2">
                            <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                        </svg>
                        <span>Lenient Drawdowns</span>
                    </div>
                    <div class="flex items-center text-sm font-medium text-white/80 hover:text-matrix-green transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap w-4 h-4 text-matrix-yellow mr-2">
                            <path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"></path>
                        </svg>
                        <span>Same Day Payout</span>
                    </div>
                </div>
            </div>
        </div>
        <section class="py-20 relative overflow-hidden bg-emerald-950">
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] rounded-full bg-matrix-glow opacity-40 z-0"></div>
            <div class="container mx-auto px-4 md:px-6 relative z-10">
                <div class="text-center mb-16 animate-fade-in">
                    <div class="chip">By The Numbers</div>
                    <h2 class="section-title mx-auto after:left-1/2 after:-translate-x-1/2">Our Trading Impact</h2>
                    <p class="max-w-3xl mx-auto text-gray-300 mt-4">{{ setting('siteName') }}has established a strong presence in the proprietary trading industry with a track record of success.</p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
                    <div class="matrix-card text-center animate-fade-in" style="animation-delay: 0.1s;">
                        <div class="text-3xl md:text-4xl font-bold mb-2 text-white flex items-center justify-center">
                            <span>$</span>
                            <div class="count-up">2.5</div>
                            <span>M</span>
                        </div>
                        <div class="text-gray-400">Million Funded</div>
                    </div>
                    <div class="matrix-card text-center animate-fade-in" style="animation-delay: 0.2s;">
                        <div class="text-3xl md:text-4xl font-bold mb-2 text-white flex items-center justify-center">
                            <span></span>
                            <div class="count-up">500</div>
                            <span>+</span>
                        </div>
                        <div class="text-gray-400">Active Traders</div>
                    </div>
                    <div class="matrix-card text-center animate-fade-in" style="animation-delay: 0.3s;">
                        <div class="text-3xl md:text-4xl font-bold mb-2 text-white flex items-center justify-center">
                            <span></span>
                            <div class="count-up">1847</div>
                            <span></span>
                        </div>
                        <div class="text-gray-400">Supported Markets</div>
                    </div>
                    <div class="matrix-card text-center animate-fade-in" style="animation-delay: 0.4s;">
                        <div class="text-3xl md:text-4xl font-bold mb-2 text-white flex items-center justify-center">
                            <span></span>
                            <div class="count-up">48</div>
                            <span>h</span>
                        </div>
                        <div class="text-gray-400">Hour Payouts</div>
                    </div>
                </div>
                <div class="mt-20">
                    <div class="text-center mb-8 animate-fade-in">
                        <div class="chip">Featured On</div>
                        <h3 class="text-xl text-white">Trusted By Industry Leaders</h3>
                    </div>
                    <div class="flex flex-wrap justify-center gap-8 items-center">
                        <div class="matrix-glass px-6 py-3 rounded-lg text-gray-400 font-semibold opacity-80 hover:opacity-100 transition-opacity animate-fade-in" style="animation-delay: 0.2s;">Bloomberg</div>
                        <div class="matrix-glass px-6 py-3 rounded-lg text-gray-400 font-semibold opacity-80 hover:opacity-100 transition-opacity animate-fade-in" style="animation-delay: 0.3s;">Reuters</div>
                        <div class="matrix-glass px-6 py-3 rounded-lg text-gray-400 font-semibold opacity-80 hover:opacity-100 transition-opacity animate-fade-in" style="animation-delay: 0.4s;">Financial Times</div>
                        <div class="matrix-glass px-6 py-3 rounded-lg text-gray-400 font-semibold opacity-80 hover:opacity-100 transition-opacity animate-fade-in" style="animation-delay: 0.5s;">Wall Street Journal</div>
                        <div class="matrix-glass px-6 py-3 rounded-lg text-gray-400 font-semibold opacity-80 hover:opacity-100 transition-opacity animate-fade-in" style="animation-delay: 0.6s;">CNBC</div>
                    </div>
                </div>
            </div>
        </section>
        <section id="how-it-works" class="py-20 relative overflow-hidden bg-matrix-dark-lighter">
            <div class="absolute inset-0 bg-matrix-gradient opacity-30 z-0"></div>
            <div class="container mx-auto px-4 md:px-6 relative z-10">
                <div class="text-center mb-16 reveal animate-fade-in">
                    <div class="chip">Simple Process</div>
                    <h2 class="section-title mx-auto after:left-1/2 after:-translate-x-1/2">How It Works</h2>
                    <p class="max-w-3xl mx-auto text-gray-300 mt-4">Our streamlined process is designed to get talented traders funded quickly with minimal restrictions.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 relative">
                    <div class="step-card reveal animate-fade-in relative z-10">
                        <div class="matrix-card h-full flex flex-col">
                            <div class="flex items-center mb-6">
                                <div class="p-4 rounded-full bg-matrix-dark inline-flex mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chart-column-increasing h-8 w-8 text-matrix-green">
                                        <path d="M13 17V9"></path>
                                        <path d="M18 17V5"></path>
                                        <path d="M3 3v16a2 2 0 0 0 2 2h16"></path>
                                        <path d="M8 17v-3"></path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-white">Evaluation Phase</h3>
                            </div>
                            <p class="text-gray-300 mb-6 min-h-[72px] text-sm leading-tight">Show your trading skills following our objectives. Our evaluation has flexible guidelines to help you succeed while maintaining proper risk management.</p>
                            <ul class="space-y-3 mt-auto">
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <span class="text-gray-300 text-sm">Trade with simulated capital up to $5M</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <span class="text-gray-300 text-sm">Follow lenient drawdown guidelines</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <span class="text-gray-300 text-sm">No time pressure on your evaluation</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="step-card reveal animate-fade-in relative z-10">
                        <div class="matrix-card h-full flex flex-col">
                            <div class="flex items-center mb-6">
                                <div class="p-4 rounded-full bg-matrix-dark inline-flex mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-8 w-8 text-matrix-yellow">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-white">Funded Trading</h3>
                            </div>
                            <p class="text-gray-300 mb-6 min-h-[72px] text-sm leading-tight">After passing evaluation, receive a funded account with real capital. Maintain same trading conditions while trading with our capital under professional risk oversight.</p>
                            <ul class="space-y-3 mt-auto">
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <span class="text-gray-300 text-sm">Same capital as evaluation account</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <span class="text-gray-300 text-sm">Identical trading rules and platform</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <span class="text-gray-300 text-sm">Real capital with risk management</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="step-card reveal animate-fade-in relative z-10">
                        <div class="matrix-card h-full flex flex-col">
                            <div class="flex items-center mb-6">
                                <div class="p-4 rounded-full bg-matrix-dark inline-flex mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-percent h-8 w-8 text-matrix-green-light">
                                        <line x1="19" x2="5" y1="5" y2="19"></line>
                                        <circle cx="6.5" cy="6.5" r="2.5"></circle>
                                        <circle cx="17.5" cy="17.5" r="2.5"></circle>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-white">Profit Splits</h3>
                            </div>
                            <p class="text-gray-300 mb-6 min-h-[72px] text-sm leading-tight">Earn high profit shares from your trading success. We offer industry-leading profit splits with reliable bi-weekly payouts and complete transparency in our model.</p>
                            <ul class="space-y-3 mt-auto">
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <span class="text-gray-300 text-sm">Up to 90% profit split available</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <span class="text-gray-300 text-sm">Bi-weekly payout schedule</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <span class="text-gray-300 text-sm">No hidden costs or extra fees</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="step-card reveal animate-fade-in relative z-10">
                        <div class="matrix-card h-full flex flex-col">
                            <div class="flex items-center mb-6">
                                <div class="p-4 rounded-full bg-matrix-dark inline-flex mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-dollar-sign h-8 w-8 text-matrix-yellow-light">
                                        <line x1="12" x2="12" y1="2" y2="22"></line>
                                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-white">Scale &amp; Grow</h3>
                            </div>
                            <p class="text-gray-300 mb-6 min-h-[72px] text-sm leading-tight">As you show consistent performance, we'll scale your account. Access increased capital allocations for higher returns and build a professional trading career with us.</p>
                            <ul class="space-y-3 mt-auto">
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <span class="text-gray-300 text-sm">Scale your capital up to $5M+</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <span class="text-gray-300 text-sm">Earn progressively higher profits</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <span class="text-gray-300 text-sm">Build a professional track record</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-12"><a href="#get-funded" class="btn-matrix-primary inline-flex items-center animate-fade-in rounded-lg">Start Your Evaluation Today</a></div>
            </div>
        </section>
        <section id="funding-options" class="py-20 relative overflow-hidden">
            <div class="absolute inset-0 bg-matrix-dark opacity-80 z-0"></div>
            <div class="container mx-auto px-4 md:px-6 relative z-10">
                <div class="text-center mb-16 animate-fade-in py-0">
                    <div class="chip">Funding Programs</div>
                    <h2 class="section-title mx-auto after:left-1/2 after:-translate-x-1/2 py-[13px]">Choose Your Capital</h2>
                    <p class="max-w-3xl mx-auto text-gray-300 mt-4">Select the account size that fits your trading strategy. All accounts come with our lenient trading conditions.</p>
                </div>
                <div class="flex justify-center mb-12">
                    <div class="matrix-glass rounded-lg p-1 inline-flex"><button class="px-6 py-2 rounded-lg transition-all duration-300 bg-gradient-to-r from-matrix-green to-matrix-green-light text-black font-medium shadow-[0_0_10px_rgba(0,230,118,0.4)]">Standard Program</button><button class="px-6 py-2 rounded-lg transition-all duration-300 text-white hover:text-matrix-yellow">Synthetic Indices</button></div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="matrix-card relative group animate-fade-in" style="animation-delay: 0s;">
                        <div class="text-center mb-6">
                            <h3 class="text-3xl font-bold text-white mb-2">$15,000</h3>
                            <p class="text-gray-400">Funded Account</p>
                        </div>
                        <div class="bg-matrix-dark-light -mx-6 px-6 py-4 mb-6">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-white mb-1">$98</div>
                                <p class="text-gray-400 text-sm">One-time fee</p>
                            </div>
                        </div>
                        <div class="space-y-4 mb-8">
                            <div class="flex justify-between items-center"><span class="text-gray-300">Profit Split</span><span class="text-white font-semibold">80%</span></div>
                            <div class="flex justify-between items-center"><span class="text-gray-300">Max Drawdown</span><span class="text-white font-semibold">12%</span></div>
                            <div class="flex justify-between items-center"><span class="text-gray-300">Daily Drawdown</span><span class="text-white font-semibold">5%</span></div>
                        </div>
                        <div class="space-y-3 mb-8">
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                    <path d="M20 6 9 17l-5-5"></path>
                                </svg>
                                <span class="text-gray-300 text-sm">Multi-Phase Evaluation</span>
                            </div>
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                    <path d="M20 6 9 17l-5-5"></path>
                                </svg>
                                <span class="text-gray-300 text-sm">Unlimited trading time</span>
                            </div>
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                    <path d="M20 6 9 17l-5-5"></path>
                                </svg>
                                <span class="text-gray-300 text-sm">Unlimited Lot size</span>
                            </div>
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                    <path d="M20 6 9 17l-5-5"></path>
                                </svg>
                                <span class="text-gray-300 text-sm">Unlimited Open Orders</span>
                            </div>
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                    <path d="M20 6 9 17l-5-5"></path>
                                </svg>
                                <span class="text-gray-300 text-sm">No Consistency Rules</span>
                            </div>
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                    <path d="M20 6 9 17l-5-5"></path>
                                </svg>
                                <span class="text-gray-300 text-sm">No Hidden Rules</span>
                            </div>
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                    <path d="M20 6 9 17l-5-5"></path>
                                </svg>
                                <span class="text-gray-300 text-sm">24hrs Support</span>
                            </div>
                        </div>
                        <div class="text-center mt-auto">
                            <a href="#get-funded" class="w-full py-3 px-6 rounded-lg inline-flex items-center justify-center transition-all duration-300 bg-gradient-to-r from-matrix-dark-light to-matrix-dark border border-matrix-green/30 text-white hover:bg-matrix-dark-light hover:shadow-[0_0_10px_rgba(0,230,118,0.3)] hover:translate-y-[-2px]">
                                <span>Get Started</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right ml-1 h-4 w-4">
                                    <path d="m9 18 6-6-6-6"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="matrix-card relative group animate-fade-in border-matrix-green border-2" style="animation-delay: 0.1s;">
                        <div class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-gradient-to-r from-matrix-green to-matrix-green-light text-black text-xs font-bold py-1 px-3 rounded-lg shadow-[0_0_10px_rgba(0,230,118,0.4)]">MOST POPULAR</div>
                        <div class="text-center mb-6">
                            <h3 class="text-3xl font-bold text-white mb-2">$25,000</h3>
                            <p class="text-gray-400">Funded Account</p>
                        </div>
                        <div class="bg-matrix-dark-light -mx-6 px-6 py-4 mb-6">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-white mb-1">$152</div>
                                <p class="text-gray-400 text-sm">One-time fee</p>
                            </div>
                        </div>
                        <div class="space-y-4 mb-8">
                            <div class="flex justify-between items-center"><span class="text-gray-300">Profit Split</span><span class="text-white font-semibold">80%</span></div>
                            <div class="flex justify-between items-center"><span class="text-gray-300">Max Drawdown</span><span class="text-white font-semibold">12%</span></div>
                            <div class="flex justify-between items-center"><span class="text-gray-300">Daily Drawdown</span><span class="text-white font-semibold">5%</span></div>
                        </div>
                        <div class="space-y-3 mb-8">
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                    <path d="M20 6 9 17l-5-5"></path>
                                </svg>
                                <span class="text-gray-300 text-sm">Multi-Phase Evaluation</span>
                            </div>
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                    <path d="M20 6 9 17l-5-5"></path>
                                </svg>
                                <span class="text-gray-300 text-sm">Unlimited trading time</span>
                            </div>
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                    <path d="M20 6 9 17l-5-5"></path>
                                </svg>
                                <span class="text-gray-300 text-sm">Unlimited Lot size</span>
                            </div>
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                    <path d="M20 6 9 17l-5-5"></path>
                                </svg>
                                <span class="text-gray-300 text-sm">Unlimited Open Orders</span>
                            </div>
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                    <path d="M20 6 9 17l-5-5"></path>
                                </svg>
                                <span class="text-gray-300 text-sm">No Consistency Rules</span>
                            </div>
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                    <path d="M20 6 9 17l-5-5"></path>
                                </svg>
                                <span class="text-gray-300 text-sm">No Hidden Rules</span>
                            </div>
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                    <path d="M20 6 9 17l-5-5"></path>
                                </svg>
                                <span class="text-gray-300 text-sm">24hrs Support</span>
                            </div>
                        </div>
                        <div class="text-center mt-auto">
                            <a href="#get-funded" class="w-full py-3 px-6 rounded-lg inline-flex items-center justify-center transition-all duration-300 bg-gradient-to-r from-matrix-green to-matrix-green-light text-black font-semibold hover:shadow-[0_0_15px_rgba(0,230,118,0.6)] hover:translate-y-[-2px]">
                                <span>Get Started</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right ml-1 h-4 w-4">
                                    <path d="m9 18 6-6-6-6"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="matrix-card relative group animate-fade-in" style="animation-delay: 0.2s;">
                        <div class="text-center mb-6">
                            <h3 class="text-3xl font-bold text-white mb-2">$50,000</h3>
                            <p class="text-gray-400">Funded Account</p>
                        </div>
                        <div class="bg-matrix-dark-light -mx-6 px-6 py-4 mb-6">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-white mb-1">$296</div>
                                <p class="text-gray-400 text-sm">One-time fee</p>
                            </div>
                        </div>
                        <div class="space-y-4 mb-8">
                            <div class="flex justify-between items-center"><span class="text-gray-300">Profit Split</span><span class="text-white font-semibold">80%</span></div>
                            <div class="flex justify-between items-center"><span class="text-gray-300">Max Drawdown</span><span class="text-white font-semibold">12%</span></div>
                            <div class="flex justify-between items-center"><span class="text-gray-300">Daily Drawdown</span><span class="text-white font-semibold">5%</span></div>
                        </div>
                        <div class="space-y-3 mb-8">
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                    <path d="M20 6 9 17l-5-5"></path>
                                </svg>
                                <span class="text-gray-300 text-sm">Multi-Phase Evaluation</span>
                            </div>
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                    <path d="M20 6 9 17l-5-5"></path>
                                </svg>
                                <span class="text-gray-300 text-sm">Unlimited trading time</span>
                            </div>
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                    <path d="M20 6 9 17l-5-5"></path>
                                </svg>
                                <span class="text-gray-300 text-sm">Unlimited Lot size</span>
                            </div>
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                    <path d="M20 6 9 17l-5-5"></path>
                                </svg>
                                <span class="text-gray-300 text-sm">No Consistency Rules</span>
                            </div>
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                    <path d="M20 6 9 17l-5-5"></path>
                                </svg>
                                <span class="text-gray-300 text-sm">Unlimited Open Orders</span>
                            </div>
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                    <path d="M20 6 9 17l-5-5"></path>
                                </svg>
                                <span class="text-gray-300 text-sm">Scaling opportunities</span>
                            </div>
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                    <path d="M20 6 9 17l-5-5"></path>
                                </svg>
                                <span class="text-gray-300 text-sm">No Hidden Rules</span>
                            </div>
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                    <path d="M20 6 9 17l-5-5"></path>
                                </svg>
                                <span class="text-gray-300 text-sm">24hrs Support</span>
                            </div>
                        </div>
                        <div class="text-center mt-auto">
                            <a href="#get-funded" class="w-full py-3 px-6 rounded-lg inline-flex items-center justify-center transition-all duration-300 bg-gradient-to-r from-matrix-dark-light to-matrix-dark border border-matrix-green/30 text-white hover:bg-matrix-dark-light hover:shadow-[0_0_10px_rgba(0,230,118,0.3)] hover:translate-y-[-2px]">
                                <span>Get Started</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right ml-1 h-4 w-4">
                                    <path d="m9 18 6-6-6-6"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="matrix-card relative group animate-fade-in" style="animation-delay: 0.3s;">
                        <div class="text-center mb-6">
                            <h3 class="text-3xl font-bold text-white mb-2">$200,000</h3>
                            <p class="text-gray-400">Funded Account</p>
                        </div>
                        <div class="bg-matrix-dark-light -mx-6 px-6 py-4 mb-6">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-white mb-1">$908</div>
                                <p class="text-gray-400 text-sm">One-time fee</p>
                            </div>
                        </div>
                        <div class="space-y-4 mb-8">
                            <div class="flex justify-between items-center"><span class="text-gray-300">Profit Split</span><span class="text-white font-semibold">80%</span></div>
                            <div class="flex justify-between items-center"><span class="text-gray-300">Max Drawdown</span><span class="text-white font-semibold">12%</span></div>
                            <div class="flex justify-between items-center"><span class="text-gray-300">Daily Drawdown</span><span class="text-white font-semibold">5%</span></div>
                        </div>
                        <div class="space-y-3 mb-8">
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                    <path d="M20 6 9 17l-5-5"></path>
                                </svg>
                                <span class="text-gray-300 text-sm">Multi-Phase Evaluation</span>
                            </div>
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                    <path d="M20 6 9 17l-5-5"></path>
                                </svg>
                                <span class="text-gray-300 text-sm">Unlimited trading time</span>
                            </div>
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                    <path d="M20 6 9 17l-5-5"></path>
                                </svg>
                                <span class="text-gray-300 text-sm">Unlimited Lot size</span>
                            </div>
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                    <path d="M20 6 9 17l-5-5"></path>
                                </svg>
                                <span class="text-gray-300 text-sm">No Consistency Rules</span>
                            </div>
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                    <path d="M20 6 9 17l-5-5"></path>
                                </svg>
                                <span class="text-gray-300 text-sm">Unlimited Open Orders</span>
                            </div>
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                    <path d="M20 6 9 17l-5-5"></path>
                                </svg>
                                <span class="text-gray-300 text-sm">Fast-track scaling</span>
                            </div>
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                    <path d="M20 6 9 17l-5-5"></path>
                                </svg>
                                <span class="text-gray-300 text-sm">No Hidden Rules</span>
                            </div>
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                    <path d="M20 6 9 17l-5-5"></path>
                                </svg>
                                <span class="text-gray-300 text-sm">24hrs Support</span>
                            </div>
                        </div>
                        <div class="text-center mt-auto">
                            <a href="#get-funded" class="w-full py-3 px-6 rounded-lg inline-flex items-center justify-center transition-all duration-300 bg-gradient-to-r from-matrix-dark-light to-matrix-dark border border-matrix-green/30 text-white hover:bg-matrix-dark-light hover:shadow-[0_0_10px_rgba(0,230,118,0.3)] hover:translate-y-[-2px]">
                                <span>Get Started</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right ml-1 h-4 w-4">
                                    <path d="m9 18 6-6-6-6"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mt-12 text-center">
                    <p class="text-gray-400 mb-6 max-w-2xl mx-auto">All programs include our lenient trading conditions with no minimum trading days and bi-weekly profit payouts.</p>
                    <a href="#contact" class="text-matrix-green hover:text-matrix-green-light transition-colors duration-300 hover:underline">Need a custom solution? Contact us</a>
                </div>
            </div>
        </section>
        <section class="py-20 relative overflow-hidden bg-matrix-dark-lighter">
            <div class="absolute inset-0 bg-matrix-gradient opacity-30 z-0"></div>
            <div class="container mx-auto px-4 md:px-6 relative z-10">
                <div class="text-center mb-16 animate-fade-in">
                    <div class="chip">Global Network</div>
                    <h2 class="section-title mx-auto after:left-1/2 after:-translate-x-1/2">Global Presence &amp; Team</h2>
                    <p class="max-w-3xl mx-auto text-gray-300 mt-4">{{ setting('siteName') }}operates globally with a team of dedicated professionals supporting traders worldwide.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                    <div class="matrix-card text-center animate-fade-in" style="animation-delay: 0s;">
                        <div class="flex justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-globe h-8 w-8 text-matrix-green">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                                <path d="M2 12h20"></path>
                            </svg>
                        </div>
                        <div class="text-3xl font-bold text-white mb-2">24+</div>
                        <h3 class="text-xl font-semibold text-white mb-3">Countries</h3>
                        <p class="text-gray-300">{{ setting('siteName') }}serves traders in over 24 countries worldwide.</p>
                    </div>
                    <div class="matrix-card text-center animate-fade-in" style="animation-delay: 0.1s;">
                        <div class="flex justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users h-8 w-8 text-matrix-yellow">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                        </div>
                        <div class="text-3xl font-bold text-white mb-2">50+</div>
                        <h3 class="text-xl font-semibold text-white mb-3">Team Members</h3>
                        <p class="text-gray-300">Our dedicated team of trading experts, risk managers, and support staff.</p>
                    </div>
                    <div class="matrix-card text-center animate-fade-in" style="animation-delay: 0.2s;">
                        <div class="flex justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock h-8 w-8 text-matrix-green-light">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                        </div>
                        <div class="text-3xl font-bold text-white mb-2">24/7</div>
                        <h3 class="text-xl font-semibold text-white mb-3">Support</h3>
                        <p class="text-gray-300">Round-the-clock support to assist you throughout your trading journey.</p>
                    </div>
                </div>
                <div class="mt-16 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="animate-fade-in">
                        <div class="matrix-glass rounded-xl p-8 relative overflow-hidden group">
                            <div class="absolute inset-0 bg-matrix-glow opacity-10 group-hover:opacity-20 transition-opacity duration-300"></div>
                            <div class="relative z-10">
                                <h3 class="text-2xl font-bold text-white mb-4">Our Dedicated Trading Team</h3>
                                <p class="text-gray-300 mb-6">Our team consists of experienced traders, risk managers, and financial experts who constantly work to improve our offering. We prioritize:</p>
                                <ul class="space-y-4">
                                    <li class="flex items-start">
                                        <div class="p-2 rounded-full bg-matrix-dark-light mr-3 mt-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users h-4 w-4 text-matrix-green">
                                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="9" cy="7" r="4"></circle>
                                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="text-white font-medium">Expert Risk Management</h4>
                                            <p class="text-gray-400 text-sm">Our risk team monitors market conditions to protect both traders and our capital.</p>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <div class="p-2 rounded-full bg-matrix-dark-light mr-3 mt-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock h-4 w-4 text-matrix-yellow">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polyline points="12 6 12 12 16 14"></polyline>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="text-white font-medium">24/7 Trading Support</h4>
                                            <p class="text-gray-400 text-sm">Our support team is always available to assist with trading platform issues.</p>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <div class="p-2 rounded-full bg-matrix-dark-light mr-3 mt-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-globe h-4 w-4 text-matrix-green-light">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                                                <path d="M2 12h20"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="text-white font-medium">Global Operations</h4>
                                            <p class="text-gray-400 text-sm">With team members across multiple time zones, we're always operational.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="relative animate-fade-in" style="animation-delay: 0.3s;">
                        <div class="rounded-xl overflow-hidden shadow-lg">
                            <img src="/uploads/b6e14de2-9a8d-4067-8fc9-6797e015abec.png" alt="MatrixTraders bull in green trading environment" class="w-full h-auto object-cover rounded-xl">
                            <div class="absolute inset-0 bg-gradient-to-t from-matrix-dark to-transparent opacity-60 rounded-xl"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="testimonials" class="py-20 relative overflow-hidden">
            <div class="absolute inset-0 bg-matrix-dark opacity-80 z-0"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] rounded-full bg-matrix-glow opacity-40 z-0"></div>
            <div class="container mx-auto px-4 md:px-6 relative z-10">
                <div class="text-center mb-16 animate-fade-in">
                    <div class="chip">Success Stories</div>
                    <h2 class="section-title mx-auto after:left-1/2 after:-translate-x-1/2">Trader Testimonials</h2>
                    <p class="max-w-3xl mx-auto text-gray-300 mt-4">Hear from traders who have successfully grown their accounts with MatrixTraders Fund.</p>
                </div>
                <div class="max-w-4xl mx-auto relative">
                    <div class="overflow-hidden">
                        <div class="flex transition-transform duration-500 ease-in-out" style="transform: translateX(0%);">
                            <div class="w-full flex-shrink-0 px-4">
                                <div class="matrix-card text-center md:text-left md:flex items-start gap-6">
                                    <div class="mb-6 md:mb-0 flex-shrink-0">
                                        <div class="w-24 h-24 rounded-full mx-auto md:mx-0 overflow-hidden border-2 border-matrix-green/30"><img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Michael T." class="w-full h-full object-cover"></div>
                                    </div>
                                    <div>
                                        <div class="flex justify-center md:justify-start mb-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-5 h-5 text-matrix-yellow fill-matrix-yellow">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-5 h-5 text-matrix-yellow fill-matrix-yellow">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-5 h-5 text-matrix-yellow fill-matrix-yellow">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-5 h-5 text-matrix-yellow fill-matrix-yellow">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-5 h-5 text-matrix-yellow fill-matrix-yellow">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                        </div>
                                        <blockquote class="italic text-gray-300 mb-6">"{{ setting('siteName') }}has completely changed my trading career. The lenient rules allowed me to trade my strategy without unnecessary pressure. I've been consistently profitable and the bi-weekly payouts are always on time."</blockquote>
                                        <div>
                                            <h4 class="text-white font-bold">Michael T.</h4>
                                            <p class="text-matrix-green">Forex Trader</p>
                                            <p class="text-gray-400 text-sm">London, UK</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex-shrink-0 px-4">
                                <div class="matrix-card text-center md:text-left md:flex items-start gap-6">
                                    <div class="mb-6 md:mb-0 flex-shrink-0">
                                        <div class="w-24 h-24 rounded-full mx-auto md:mx-0 overflow-hidden border-2 border-matrix-green/30"><img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Sarah J." class="w-full h-full object-cover"></div>
                                    </div>
                                    <div>
                                        <div class="flex justify-center md:justify-start mb-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-5 h-5 text-matrix-yellow fill-matrix-yellow">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-5 h-5 text-matrix-yellow fill-matrix-yellow">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-5 h-5 text-matrix-yellow fill-matrix-yellow">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-5 h-5 text-matrix-yellow fill-matrix-yellow">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-5 h-5 text-matrix-yellow fill-matrix-yellow">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                        </div>
                                        <blockquote class="italic text-gray-300 mb-6">"After trying several other prop firms, MatrixTraders stands out with their excellent support and fair trading conditions. The high profit split and scaling opportunities have allowed me to make trading my full-time career."</blockquote>
                                        <div>
                                            <h4 class="text-white font-bold">Sarah J.</h4>
                                            <p class="text-matrix-green">Equity Trader</p>
                                            <p class="text-gray-400 text-sm">New York, USA</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex-shrink-0 px-4">
                                <div class="matrix-card text-center md:text-left md:flex items-start gap-6">
                                    <div class="mb-6 md:mb-0 flex-shrink-0">
                                        <div class="w-24 h-24 rounded-full mx-auto md:mx-0 overflow-hidden border-2 border-matrix-green/30"><img src="https://randomuser.me/api/portraits/men/62.jpg" alt="David K." class="w-full h-full object-cover"></div>
                                    </div>
                                    <div>
                                        <div class="flex justify-center md:justify-start mb-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-5 h-5 text-matrix-yellow fill-matrix-yellow">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-5 h-5 text-matrix-yellow fill-matrix-yellow">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-5 h-5 text-matrix-yellow fill-matrix-yellow">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-5 h-5 text-matrix-yellow fill-matrix-yellow">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-5 h-5 text-matrix-yellow fill-matrix-yellow">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                        </div>
                                        <blockquote class="italic text-gray-300 mb-6">"The $100,000 account from MatrixTraders has been incredible. Their platform is reliable and the analytics tools have helped me improve my strategy. The 70% profit split is the best I've found in the industry."</blockquote>
                                        <div>
                                            <h4 class="text-white font-bold">David K.</h4>
                                            <p class="text-matrix-green">Futures Trader</p>
                                            <p class="text-gray-400 text-sm">Sydney, Australia</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex-shrink-0 px-4">
                                <div class="matrix-card text-center md:text-left md:flex items-start gap-6">
                                    <div class="mb-6 md:mb-0 flex-shrink-0">
                                        <div class="w-24 h-24 rounded-full mx-auto md:mx-0 overflow-hidden border-2 border-matrix-green/30"><img src="https://randomuser.me/api/portraits/women/29.jpg" alt="Elena R." class="w-full h-full object-cover"></div>
                                    </div>
                                    <div>
                                        <div class="flex justify-center md:justify-start mb-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-5 h-5 text-matrix-yellow fill-matrix-yellow">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-5 h-5 text-matrix-yellow fill-matrix-yellow">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-5 h-5 text-matrix-yellow fill-matrix-yellow">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-5 h-5 text-matrix-yellow fill-matrix-yellow">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-5 h-5 text-gray-500">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                        </div>
                                        <blockquote class="italic text-gray-300 mb-6">"I appreciate how {{ setting('siteName') }}adapted to include crypto markets. The evaluation process was straightforward and I was funded within days of passing. Their risk management team is responsive and understanding."</blockquote>
                                        <div>
                                            <h4 class="text-white font-bold">Elena R.</h4>
                                            <p class="text-matrix-green">Crypto Trader</p>
                                            <p class="text-gray-400 text-sm">Berlin, Germany</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center mt-8 gap-4">
                        <button class="p-2 rounded-full bg-matrix-dark-light text-white hover:bg-matrix-green hover:text-black transition-colors duration-300" aria-label="Previous testimonial">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-left w-6 h-6">
                                <path d="m15 18-6-6 6-6"></path>
                            </svg>
                        </button>
                        <div class="flex gap-2 items-center"><button class="h-3 rounded-full transition-all duration-300 bg-matrix-green w-6" aria-label="Go to testimonial 1"></button><button class="w-3 h-3 rounded-full transition-all duration-300 bg-gray-500 hover:bg-gray-400" aria-label="Go to testimonial 2"></button><button class="w-3 h-3 rounded-full transition-all duration-300 bg-gray-500 hover:bg-gray-400" aria-label="Go to testimonial 3"></button><button class="w-3 h-3 rounded-full transition-all duration-300 bg-gray-500 hover:bg-gray-400" aria-label="Go to testimonial 4"></button></div>
                        <button class="p-2 rounded-full bg-matrix-dark-light text-white hover:bg-matrix-green hover:text-black transition-colors duration-300" aria-label="Next testimonial">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-6 h-6">
                                <path d="m9 18 6-6-6-6"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="mt-16 matrix-glass rounded-xl p-6 md:p-8 animate-fade-in">
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold text-white mb-3">Recent Trader Payouts</h3>
                        <p class="text-gray-300">Check out some of our recent trader payouts</p>
                    </div>
                    <div class="w-full overflow-hidden">
                        <div class="relative w-full" role="region" aria-roledescription="carousel">
                            <div class="overflow-hidden">
                                <div class="flex -ml-2 md:-ml-4" style="transform: translate3d(-1264px, 0px, 0px);">
                                    <div role="group" aria-roledescription="slide" class="min-w-0 shrink-0 grow-0 pl-2 md:pl-4 basis-full sm:basis-1/2 md:basis-1/3 lg:basis-1/4" style="transform: translate3d(0px, 0px, 0px);">
                                        <div class="bg-matrix-dark-light rounded-lg p-4 transition-transform duration-300 hover:scale-105 h-full">
                                            <h4 class="text-white font-medium">Alex M.</h4>
                                            <div class="text-matrix-green font-bold text-xl">$12,450</div>
                                            <p class="text-gray-400 text-sm">May 2, 2023</p>
                                        </div>
                                    </div>
                                    <div role="group" aria-roledescription="slide" class="min-w-0 shrink-0 grow-0 pl-2 md:pl-4 basis-full sm:basis-1/2 md:basis-1/3 lg:basis-1/4">
                                        <div class="bg-matrix-dark-light rounded-lg p-4 transition-transform duration-300 hover:scale-105 h-full">
                                            <h4 class="text-white font-medium">Rebecca T.</h4>
                                            <div class="text-matrix-green font-bold text-xl">$8,720</div>
                                            <p class="text-gray-400 text-sm">May 15, 2023</p>
                                        </div>
                                    </div>
                                    <div role="group" aria-roledescription="slide" class="min-w-0 shrink-0 grow-0 pl-2 md:pl-4 basis-full sm:basis-1/2 md:basis-1/3 lg:basis-1/4">
                                        <div class="bg-matrix-dark-light rounded-lg p-4 transition-transform duration-300 hover:scale-105 h-full">
                                            <h4 class="text-white font-medium">Carlos S.</h4>
                                            <div class="text-matrix-green font-bold text-xl">$22,105</div>
                                            <p class="text-gray-400 text-sm">May 16, 2023</p>
                                        </div>
                                    </div>
                                    <div role="group" aria-roledescription="slide" class="min-w-0 shrink-0 grow-0 pl-2 md:pl-4 basis-full sm:basis-1/2 md:basis-1/3 lg:basis-1/4">
                                        <div class="bg-matrix-dark-light rounded-lg p-4 transition-transform duration-300 hover:scale-105 h-full">
                                            <h4 class="text-white font-medium">Jason L.</h4>
                                            <div class="text-matrix-green font-bold text-xl">$7,840</div>
                                            <p class="text-gray-400 text-sm">May 30, 2023</p>
                                        </div>
                                    </div>
                                    <div role="group" aria-roledescription="slide" class="min-w-0 shrink-0 grow-0 pl-2 md:pl-4 basis-full sm:basis-1/2 md:basis-1/3 lg:basis-1/4">
                                        <div class="bg-matrix-dark-light rounded-lg p-4 transition-transform duration-300 hover:scale-105 h-full">
                                            <h4 class="text-white font-medium">Emma W.</h4>
                                            <div class="text-matrix-green font-bold text-xl">$15,320</div>
                                            <p class="text-gray-400 text-sm">June 3, 2023</p>
                                        </div>
                                    </div>
                                    <div role="group" aria-roledescription="slide" class="min-w-0 shrink-0 grow-0 pl-2 md:pl-4 basis-full sm:basis-1/2 md:basis-1/3 lg:basis-1/4">
                                        <div class="bg-matrix-dark-light rounded-lg p-4 transition-transform duration-300 hover:scale-105 h-full">
                                            <h4 class="text-white font-medium">Thomas P.</h4>
                                            <div class="text-matrix-green font-bold text-xl">$9,650</div>
                                            <p class="text-gray-400 text-sm">June 8, 2023</p>
                                        </div>
                                    </div>
                                    <div role="group" aria-roledescription="slide" class="min-w-0 shrink-0 grow-0 pl-2 md:pl-4 basis-full sm:basis-1/2 md:basis-1/3 lg:basis-1/4">
                                        <div class="bg-matrix-dark-light rounded-lg p-4 transition-transform duration-300 hover:scale-105 h-full">
                                            <h4 class="text-white font-medium">Sophia R.</h4>
                                            <div class="text-matrix-green font-bold text-xl">$18,750</div>
                                            <p class="text-gray-400 text-sm">June 12, 2023</p>
                                        </div>
                                    </div>
                                    <div role="group" aria-roledescription="slide" class="min-w-0 shrink-0 grow-0 pl-2 md:pl-4 basis-full sm:basis-1/2 md:basis-1/3 lg:basis-1/4">
                                        <div class="bg-matrix-dark-light rounded-lg p-4 transition-transform duration-300 hover:scale-105 h-full">
                                            <h4 class="text-white font-medium">Daniel M.</h4>
                                            <div class="text-matrix-green font-bold text-xl">$11,200</div>
                                            <p class="text-gray-400 text-sm">June 15, 2023</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-8"><a href="#get-funded" class="text-matrix-yellow hover:text-matrix-yellow-light transition-colors duration-300">You could be next! Start your evaluation today</a></div>
                </div>
            </div>
        </section>
        <section id="platform" class="py-20 relative overflow-hidden bg-matrix-dark-lighter">
            <div class="absolute inset-0 bg-matrix-gradient opacity-30 z-0"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] rounded-full bg-matrix-glow opacity-40 z-0"></div>
            <div class="container mx-auto px-4 md:px-6 relative z-10">
                <div class="text-center mb-16 animate-fade-in">
                    <div class="chip">Trading Technology</div>
                    <h2 class="section-title mx-auto after:left-1/2 after:-translate-x-1/2">Our Trading Platform</h2>
                    <p class="max-w-3xl mx-auto text-gray-300 mt-4">Experience our state-of-the-art trading platform designed for both desktop and mobile trading.</p>
                </div>
                <div class="flex justify-center mb-12">
                    <div class="matrix-glass rounded-full p-1 inline-flex">
                        <button class="px-6 py-2 rounded-full transition-all duration-300 flex items-center bg-matrix-green text-black font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-laptop w-5 h-5 mr-2">
                                <path d="M20 16V7a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v9m16 0H4m16 0 1.28 2.55a1 1 0 0 1-.9 1.45H3.62a1 1 0 0 1-.9-1.45L4 16"></path>
                            </svg>
                            Desktop
                        </button>
                        <button class="px-6 py-2 rounded-full transition-all duration-300 flex items-center text-white hover:text-matrix-yellow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-smartphone w-5 h-5 mr-2">
                                <rect width="14" height="20" x="5" y="2" rx="2" ry="2"></rect>
                                <path d="M12 18h.01"></path>
                            </svg>
                            Mobile
                        </button>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="order-2 lg:order-1">
                        <div class="matrix-glass rounded-xl p-6 relative overflow-hidden animate-fade-in">
                            <div data-radix-aspect-ratio-wrapper="" style="position: relative; width: 100%; padding-bottom: 56.25%;">
                                <div style="position: absolute; inset: 0px;"><img src="/uploads/23f49992-baf4-4d55-938b-3ae5d74d4b72.png" alt="MatrixTraders desktop trading platform" class="w-full h-full object-cover rounded-lg shadow-lg"></div>
                            </div>
                            <div class="absolute inset-0 bg-matrix-glow opacity-30 mix-blend-overlay rounded-lg"></div>
                        </div>
                    </div>
                    <div class="order-1 lg:order-2 animate-fade-in" style="animation-delay: 0.3s;">
                        <h3 class="text-2xl font-bold text-white mb-6">Advanced Trading Experience</h3>
                        <p class="text-gray-300 mb-8">Our proprietary trading platform is designed to give you a competitive edge in the markets. Built with the latest technology, it offers all the tools needed for successful trading.</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="flex items-start">
                                <div class="p-1 rounded-full bg-matrix-dark flex-shrink-0 mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-4 w-4 text-matrix-green">
                                        <path d="M20 6 9 17l-5-5"></path>
                                    </svg>
                                </div>
                                <span class="text-gray-300">Advanced charting with multiple timeframes</span>
                            </div>
                            <div class="flex items-start">
                                <div class="p-1 rounded-full bg-matrix-dark flex-shrink-0 mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-4 w-4 text-matrix-green">
                                        <path d="M20 6 9 17l-5-5"></path>
                                    </svg>
                                </div>
                                <span class="text-gray-300">Real-time market data across all instruments</span>
                            </div>
                            <div class="flex items-start">
                                <div class="p-1 rounded-full bg-matrix-dark flex-shrink-0 mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-4 w-4 text-matrix-green">
                                        <path d="M20 6 9 17l-5-5"></path>
                                    </svg>
                                </div>
                                <span class="text-gray-300">One-click trading execution</span>
                            </div>
                            <div class="flex items-start">
                                <div class="p-1 rounded-full bg-matrix-dark flex-shrink-0 mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-4 w-4 text-matrix-green">
                                        <path d="M20 6 9 17l-5-5"></path>
                                    </svg>
                                </div>
                                <span class="text-gray-300">Detailed performance analytics</span>
                            </div>
                            <div class="flex items-start">
                                <div class="p-1 rounded-full bg-matrix-dark flex-shrink-0 mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-4 w-4 text-matrix-green">
                                        <path d="M20 6 9 17l-5-5"></path>
                                    </svg>
                                </div>
                                <span class="text-gray-300">Risk management tools</span>
                            </div>
                            <div class="flex items-start">
                                <div class="p-1 rounded-full bg-matrix-dark flex-shrink-0 mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-4 w-4 text-matrix-green">
                                        <path d="M20 6 9 17l-5-5"></path>
                                    </svg>
                                </div>
                                <span class="text-gray-300">Custom indicators and strategies</span>
                            </div>
                            <div class="flex items-start">
                                <div class="p-1 rounded-full bg-matrix-dark flex-shrink-0 mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-4 w-4 text-matrix-green">
                                        <path d="M20 6 9 17l-5-5"></path>
                                    </svg>
                                </div>
                                <span class="text-gray-300">Multi-device synchronization</span>
                            </div>
                            <div class="flex items-start">
                                <div class="p-1 rounded-full bg-matrix-dark flex-shrink-0 mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-4 w-4 text-matrix-green">
                                        <path d="M20 6 9 17l-5-5"></path>
                                    </svg>
                                </div>
                                <span class="text-gray-300">Secure login and data protection</span>
                            </div>
                        </div>
                        <div class="mt-8"><a href="#get-funded" class="btn-matrix-primary">Try Our Platform</a></div>
                    </div>
                </div>
            </div>
        </section>
        <section id="faq" class="py-20 relative overflow-hidden">
            <div class="absolute inset-0 bg-matrix-dark opacity-80 z-0"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] rounded-full bg-matrix-glow opacity-30 z-0"></div>
            <div class="container mx-auto px-4 md:px-6 relative z-10">
                <div class="text-center mb-16 reveal animate-fade-in">
                    <div class="chip">Frequently Asked Questions</div>
                    <h2 class="section-title mx-auto after:left-1/2 after:-translate-x-1/2">Frequently Asked Questions</h2>
                    <p class="max-w-3xl mx-auto text-gray-300 mt-4">Find answers to common questions about our funded trading programs</p>
                </div>
                <div class="max-w-4xl mx-auto">
                    <div class="relative mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search absolute left-3 top-2.5 h-4 w-4 text-gray-500">
                            <circle cx="11" cy="11" r="8"></circle>
                            <path d="m21 21-4.3-4.3"></path>
                        </svg>
                        <input class="flex h-10 w-full rounded-md border px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-10 bg-matrix-dark border-matrix-green/30 text-white" placeholder="Search FAQs..." value="">
                    </div>
                    <div class="w-full space-y-4" data-orientation="vertical">
                        <div data-state="closed" data-orientation="vertical" class="border-b matrix-card border-none mb-4 reveal animate-fade-in" style="animation-delay: 0s;">
                            <h3 data-orientation="vertical" data-state="closed" class="flex">
                                <button type="button" aria-controls="radix-:r1:" aria-expanded="false" data-state="closed" data-orientation="vertical" id="radix-:r0:" class="flex flex-1 items-center justify-between transition-all [&amp;[data-state=open]>svg]:rotate-180 text-white hover:text-matrix-green hover:no-underline px-6 py-4 text-lg font-medium" data-radix-collection-item="">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-help w-5 h-5 mr-3 text-matrix-green flex-shrink-0">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                            <path d="M12 17h.01"></path>
                                        </svg>
                                        <span class="text-left">How does the {{ setting('siteName') }}evaluation process work?</span>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down h-4 w-4 shrink-0 transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </button>
                            </h3>
                            <div data-state="closed" id="radix-:r1:" hidden="" role="region" aria-labelledby="radix-:r0:" data-orientation="vertical" class="overflow-hidden text-sm transition-all data-[state=closed]:animate-accordion-up data-[state=open]:animate-accordion-down" style="--radix-accordion-content-height: var(--radix-collapsible-content-height); --radix-accordion-content-width: var(--radix-collapsible-content-width);"></div>
                        </div>
                        <div data-state="closed" data-orientation="vertical" class="border-b matrix-card border-none mb-4 reveal animate-fade-in" style="animation-delay: 0.1s;">
                            <h3 data-orientation="vertical" data-state="closed" class="flex">
                                <button type="button" aria-controls="radix-:r3:" aria-expanded="false" data-state="closed" data-orientation="vertical" id="radix-:r2:" class="flex flex-1 items-center justify-between transition-all [&amp;[data-state=open]>svg]:rotate-180 text-white hover:text-matrix-green hover:no-underline px-6 py-4 text-lg font-medium" data-radix-collection-item="">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-help w-5 h-5 mr-3 text-matrix-green flex-shrink-0">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                            <path d="M12 17h.01"></path>
                                        </svg>
                                        <span class="text-left">What are the profit splits and how do payouts work?</span>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down h-4 w-4 shrink-0 transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </button>
                            </h3>
                            <div data-state="closed" id="radix-:r3:" hidden="" role="region" aria-labelledby="radix-:r2:" data-orientation="vertical" class="overflow-hidden text-sm transition-all data-[state=closed]:animate-accordion-up data-[state=open]:animate-accordion-down" style="--radix-accordion-content-height: var(--radix-collapsible-content-height); --radix-accordion-content-width: var(--radix-collapsible-content-width);"></div>
                        </div>
                        <div data-state="closed" data-orientation="vertical" class="border-b matrix-card border-none mb-4 reveal animate-fade-in" style="animation-delay: 0.2s;">
                            <h3 data-orientation="vertical" data-state="closed" class="flex">
                                <button type="button" aria-controls="radix-:r5:" aria-expanded="false" data-state="closed" data-orientation="vertical" id="radix-:r4:" class="flex flex-1 items-center justify-between transition-all [&amp;[data-state=open]>svg]:rotate-180 text-white hover:text-matrix-green hover:no-underline px-6 py-4 text-lg font-medium" data-radix-collection-item="">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-help w-5 h-5 mr-3 text-matrix-green flex-shrink-0">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                            <path d="M12 17h.01"></path>
                                        </svg>
                                        <span class="text-left">Which markets can I trade with MatrixTraders Fund?</span>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down h-4 w-4 shrink-0 transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </button>
                            </h3>
                            <div data-state="closed" id="radix-:r5:" role="region" aria-labelledby="radix-:r4:" data-orientation="vertical" class="overflow-hidden text-sm transition-all data-[state=closed]:animate-accordion-up data-[state=open]:animate-accordion-down" style="--radix-accordion-content-height: var(--radix-collapsible-content-height); --radix-accordion-content-width: var(--radix-collapsible-content-width); --radix-collapsible-content-height: 155.03997802734375px; --radix-collapsible-content-width: 316.1999816894531px;" hidden=""></div>
                        </div>
                        <div data-state="closed" data-orientation="vertical" class="border-b matrix-card border-none mb-4 reveal animate-fade-in" style="animation-delay: 0.3s;">
                            <h3 data-orientation="vertical" data-state="closed" class="flex">
                                <button type="button" aria-controls="radix-:r7:" aria-expanded="false" data-state="closed" data-orientation="vertical" id="radix-:r6:" class="flex flex-1 items-center justify-between transition-all [&amp;[data-state=open]>svg]:rotate-180 text-white hover:text-matrix-green hover:no-underline px-6 py-4 text-lg font-medium" data-radix-collection-item="">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-help w-5 h-5 mr-3 text-matrix-green flex-shrink-0">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                            <path d="M12 17h.01"></path>
                                        </svg>
                                        <span class="text-left">Is there a time limit to complete the evaluation phase?</span>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down h-4 w-4 shrink-0 transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </button>
                            </h3>
                            <div data-state="closed" id="radix-:r7:" hidden="" role="region" aria-labelledby="radix-:r6:" data-orientation="vertical" class="overflow-hidden text-sm transition-all data-[state=closed]:animate-accordion-up data-[state=open]:animate-accordion-down" style="--radix-accordion-content-height: var(--radix-collapsible-content-height); --radix-accordion-content-width: var(--radix-collapsible-content-width);"></div>
                        </div>
                        <div data-state="closed" data-orientation="vertical" class="border-b matrix-card border-none mb-4 reveal animate-fade-in" style="animation-delay: 0.4s;">
                            <h3 data-orientation="vertical" data-state="closed" class="flex">
                                <button type="button" aria-controls="radix-:r9:" aria-expanded="false" data-state="closed" data-orientation="vertical" id="radix-:r8:" class="flex flex-1 items-center justify-between transition-all [&amp;[data-state=open]>svg]:rotate-180 text-white hover:text-matrix-green hover:no-underline px-6 py-4 text-lg font-medium" data-radix-collection-item="">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-help w-5 h-5 mr-3 text-matrix-green flex-shrink-0">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                            <path d="M12 17h.01"></path>
                                        </svg>
                                        <span class="text-left">What trading platforms do you support?</span>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down h-4 w-4 shrink-0 transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </button>
                            </h3>
                            <div data-state="closed" id="radix-:r9:" hidden="" role="region" aria-labelledby="radix-:r8:" data-orientation="vertical" class="overflow-hidden text-sm transition-all data-[state=closed]:animate-accordion-up data-[state=open]:animate-accordion-down" style="--radix-accordion-content-height: var(--radix-collapsible-content-height); --radix-accordion-content-width: var(--radix-collapsible-content-width);"></div>
                        </div>
                        <div data-state="closed" data-orientation="vertical" class="border-b matrix-card border-none mb-4 reveal animate-fade-in" style="animation-delay: 0.5s;">
                            <h3 data-orientation="vertical" data-state="closed" class="flex">
                                <button type="button" aria-controls="radix-:rb:" aria-expanded="false" data-state="closed" data-orientation="vertical" id="radix-:ra:" class="flex flex-1 items-center justify-between transition-all [&amp;[data-state=open]>svg]:rotate-180 text-white hover:text-matrix-green hover:no-underline px-6 py-4 text-lg font-medium" data-radix-collection-item="">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-help w-5 h-5 mr-3 text-matrix-green flex-shrink-0">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                            <path d="M12 17h.01"></path>
                                        </svg>
                                        <span class="text-left">Are there any restrictions on trading strategies?</span>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down h-4 w-4 shrink-0 transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </button>
                            </h3>
                            <div data-state="closed" id="radix-:rb:" hidden="" role="region" aria-labelledby="radix-:ra:" data-orientation="vertical" class="overflow-hidden text-sm transition-all data-[state=closed]:animate-accordion-up data-[state=open]:animate-accordion-down" style="--radix-accordion-content-height: var(--radix-collapsible-content-height); --radix-accordion-content-width: var(--radix-collapsible-content-width);"></div>
                        </div>
                    </div>
                    <div class="text-center mt-12 reveal animate-fade-in">
                        <p class="text-gray-300 mb-4">Still have questions? We're here to help!</p>
                        <a href="#contact" class="inline-flex items-center btn-matrix-outline px-6 py-3 text-base "><span>Contact Support</span></a>
                    </div>
                </div>
            </div>
        </section>
        <section id="get-funded" class="py-20 relative overflow-hidden">
            <div class="absolute inset-0 bg-matrix-dark opacity-80 z-0"></div>
            <div class="absolute inset-0 bg-center bg-cover opacity-30 z-[-1]" style="background-image: url(&quot;/uploads/24721cda-dcd7-4296-a4bd-875c43e34217.png&quot;); background-attachment: fixed;"></div>
            <div class="container mx-auto px-4 md:px-6 relative z-10">
                <div class="max-w-4xl mx-auto matrix-glass rounded-lg p-8 md:p-12 border border-matrix-green/30 animate-fade-in">
                    <div class="text-center mb-10">
                        <div class="chip">Ready to Start?</div>
                        <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Begin Your Trading Journey Today</h2>
                        <p class="text-xl text-gray-300">Get funded with up to $5,000,000 in trading capital and keep up to 90% of the profits.</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
                        <div class="flex items-center animate-fade-in" style="animation-delay: 0s;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg>
                            <span class="text-white">One-time evaluation fee</span>
                        </div>
                        <div class="flex items-center animate-fade-in" style="animation-delay: 0.1s;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg>
                            <span class="text-white">Bi-weekly profit payouts</span>
                        </div>
                        <div class="flex items-center animate-fade-in" style="animation-delay: 0.2s;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg>
                            <span class="text-white">No time limits</span>
                        </div>
                        <div class="flex items-center animate-fade-in" style="animation-delay: 0.3s;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg>
                            <span class="text-white">Lenient drawdowns</span>
                        </div>
                        <div class="flex items-center animate-fade-in" style="animation-delay: 0.4s;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg>
                            <span class="text-white">Scale up to $5M</span>
                        </div>
                        <div class="flex items-center animate-fade-in" style="animation-delay: 0.5s;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-matrix-green mr-2 flex-shrink-0">
                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg>
                            <span class="text-white">24/7 support</span>
                        </div>
                    </div>
                    <div class="text-center space-y-6">
                        <button class="inline-flex items-center btn-matrix-primary px-8 py-4 text-lg ">
                            <span>Get Funded Now</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right ml-2 h-5 w-5">
                                <path d="m9 18 6-6-6-6"></path>
                            </svg>
                        </button>
                        <p class="text-gray-400">No hidden fees. No surprises. Just fair trading conditions.</p>
                    </div>
                </div>
                <div id="contact" class="mt-20 text-center animate-fade-in" style="animation-delay: 0.3s;">
                    <h3 class="text-2xl font-bold text-white mb-4">Have Questions?</h3>
                    <p class="text-gray-300 mb-6">Our team is ready to assist you with any questions about our funding programs.</p>
                    <div class="flex justify-center space-x-4">
                        <a href="mailto:support@matrixtradersfund.com" class="inline-flex items-center btn-matrix-outline px-6 py-3 text-base "><span>Contact Support</span></a>
                        <a href="https://wa.me/447310564189?text=Hello%2C%20I'd%20like%20to%20get%20more%20information%20about%20MatrixTraders%20Fund." target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center bg-[#25D366] text-white px-4 py-2 rounded-lg hover:bg-[#128C7E] transition-colors shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-circle mr-2 h-5 w-5">
                                <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path>
                            </svg>
                            WhatsApp Support
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <footer class="bg-matrix-dark border-t border-matrix-dark-lighter">
            <div class="container mx-auto px-4 md:px-6 py-4">
                <div class="flex flex-col md:flex-row justify-between items-center mb-4">
                    <div class="mb-4 md:mb-0">
                        <p class="text-gray-400 text-sm">© 2024 MatrixTraders Fund. All Rights Reserved.</p>
                    </div>
                    <div class="flex flex-wrap gap-4 md:gap-8 text-sm text-gray-400"><a href="#" class="hover:text-matrix-green transition-colors">Privacy Policy</a><a href="#" class="hover:text-matrix-green transition-colors">Terms of Use</a><a href="#" class="hover:text-matrix-green transition-colors">Risk Warning</a></div>
                    <div class="flex gap-4 mt-4 md:mt-0">
                        <a href="https://linktr.ee/matrixtradersfund" target="_blank" rel="noopener noreferrer" class="flex items-center gap-1 px-3 py-1 bg-matrix-green text-black rounded hover:bg-matrix-green-light transition-colors text-sm font-medium">
                            <span>More</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link">
                                <path d="M15 3h6v6"></path>
                                <path d="M10 14 21 3"></path>
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                            </svg>
                        </a>
                        <a href="https://www.facebook.com/share/16nZ2y5bUJ/" target="_blank" rel="noopener noreferrer" aria-label="Facebook" class="text-gray-400 hover:text-matrix-green transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-facebook">
                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                            </svg>
                        </a>
                        <a href="https://discord.gg/9x43cg67nm" target="_blank" rel="noopener noreferrer" aria-label="Discord" class="text-gray-400 hover:text-matrix-green transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="9" cy="12" r="1"></circle>
                                <circle cx="15" cy="12" r="1"></circle>
                                <path d="M7.5 7.2a4.73 4.73 0 0 1 4.5-1.2 4.73 4.73 0 0 1 4.5 1.2 9.44 9.44 0 0 1 2.5 5.8c0 2-2 3-2 3l-3 1 1 3h-6l1-3-3-1s-2-1-2-3a9.44 9.44 0 0 1 2.5-5.8z"></path>
                            </svg>
                        </a>
                        <a href="https://t.me/matrixtradersfund" target="_blank" rel="noopener noreferrer" aria-label="Telegram" class="text-gray-400 hover:text-matrix-green transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-send">
                                <path d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z"></path>
                                <path d="m21.854 2.147-10.94 10.939"></path>
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/matrixtradersfund" target="_blank" rel="noopener noreferrer" aria-label="Instagram" class="text-gray-400 hover:text-matrix-green transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-instagram">
                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
                            </svg>
                        </a>
                        <a href="https://x.com/matrixtradefund?t=JsdfL-OrGH6liukwlH_eGQ&amp;s=09" target="_blank" rel="noopener noreferrer" aria-label="Twitter" class="text-gray-400 hover:text-matrix-green transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-twitter">
                                <path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-matrix-dark-lighter">
                <div class="container mx-auto px-4 md:px-6">
                    <button class="flex items-center justify-between w-full py-2 text-sm text-gray-400 hover:text-matrix-green transition-colors">
                        <p class="text-left">All information provided on this site is intended solely for study purposes related to trading on financial markets and does not serve in any way as a specific investment recommendation, business recommendation, investment opportunity analysis or similar.</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down">
                            <path d="m6 9 6 6 6-6"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </footer>
    </div>
    <div class="fixed bottom-0 left-0 z-50 w-full h-16 bg-matrix-dark-lighter backdrop-blur-md border-t border-matrix-green/20 md:hidden">
        <div class="grid h-full grid-cols-5">
            <a href="#home" class="flex flex-col items-center justify-center text-gray-300 hover:text-matrix-green transition-colors duration-300 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house">
                    <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path>
                    <path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                </svg>
                <span class="text-xs mt-1">Home</span>
            </a>
            <a href="#funding-options" class="flex flex-col items-center justify-center text-gray-300 hover:text-matrix-green transition-colors duration-300 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chart-no-axes-column">
                    <line x1="18" x2="18" y1="20" y2="10"></line>
                    <line x1="12" x2="12" y1="20" y2="4"></line>
                    <line x1="6" x2="6" y1="20" y2="14"></line>
                </svg>
                <span class="text-xs mt-1">Funding Options</span>
            </a>
            <button class="flex flex-col items-center justify-center ">
                <div class="rounded-full bg-matrix-green p-3 -mt-6">
                    <div class="h-5 w-5"><img src="/uploads/34e50189-179f-423b-bf9c-a4ea1bfa5306.png" alt="MatrixTraders Icon" class="h-full w-auto"></div>
                </div>
                <span class="text-xs mt-1 text-matrix-green">Get Funded</span>
            </button>
            <button class="flex flex-col items-center justify-center text-gray-300 hover:text-matrix-green transition-colors duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user">
                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
                <span class="text-xs mt-1">Sign In</span>
            </button>
            <button class="flex flex-col items-center justify-center text-gray-300 hover:text-matrix-green transition-colors duration-300 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu">
                    <line x1="4" x2="20" y1="12" y2="12"></line>
                    <line x1="4" x2="20" y1="6" y2="6"></line>
                    <line x1="4" x2="20" y1="18" y2="18"></line>
                </svg>
                <span class="text-xs mt-1">Menu</span>
            </button>
        </div>
    </div>
</main>
@endsection
