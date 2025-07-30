@extends('layouts.main')

@section('container')

    <div id="podcast-root"></div>

    <script crossorigin src="https://unpkg.com/react@18/umd/react.production.min.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@18/umd/react-dom.production.min.js"></script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    @vite(['resources/css/app.css'])
    <style>
        @font-face {
            font-family: 'lavish';
            src: url('{{ asset("fonts/lavish.ttf") }}');
        }

        @font-face {
            font-family: 'Royal Couture';
            src: url('{{ asset("fonts/Royal Couture.ttf") }}');
        }

        .font-lavish {
            font-family: 'lavish', serif;
        }
        
        .font-royale-serif {
            font-family: 'Royal Couture', serif;
        }
        
        .scroll-arrow {
            animation: scrolldown 1.5s ease-in-out infinite;
            transition: all 0.3s ease;
        }
        
        .scroll-arrow:hover {
            transform: translateX(-50%) translateY(-8px) rotate(45deg) scale(1.2);
            filter: drop-shadow(0 0 15px rgba(246, 231, 156, 0.6)) !important;
        }
        
        @keyframes scrolldown {
            0%, 100% {
                transform: translateX(-50%) translateY(25%) rotate(45deg);
                opacity: 0.8;
            }
            50% {
                transform: translateX(-50%) translateY(0%) rotate(45deg);
                opacity: 0.3;
            }
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeInScale {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        
        @keyframes pulse {
            0%, 100% {
                box-shadow: 0 0 30px rgba(246, 231, 156, 0.2), inset 0 0 30px rgba(246, 231, 156, 0.1);
            }
            50% {
                box-shadow: 0 0 40px rgba(246, 231, 156, 0.3), inset 0 0 40px rgba(246, 231, 156, 0.15);
            }
        }
        
        [data-judge-photo] {
            animation: pulse 3s ease-in-out infinite;
        }
        
        .text-glow {
            text-shadow: 
                0 0 10px rgba(246, 231, 156, 0.5),
                0 0 20px rgba(246, 231, 156, 0.3),
                0 0 30px rgba(246, 231, 156, 0.2);
        }
        
        [data-aos="flip-left"] {
            transform: perspective(2500px) rotateY(-100deg);
        }
        
        [data-aos="flip-right"] {
            transform: perspective(2500px) rotateY(100deg);
        }
        
        [data-aos="zoom-in-up"] {
            transform: translate3d(0, 100px, 0) scale(0.6);
        }

        [data-aos] {
            will-change: transform, opacity;
        }
        

        @media (prefers-reduced-motion: reduce) {
            [data-aos] {
                animation: none !important;
                transition: none !important;
                transform: none !important;
            }
        }
        
        #podcast-root {
            margin-bottom: 0 !important;
        }
        
        footer {
            margin-top: 0 !important;
            padding-top: 0 !important;
        }
        
        footer::before {
            content: '';
            display: block;
            height: 2px;
            background: linear-gradient(90deg, transparent, rgba(246, 231, 156, 0.3), transparent);
            margin-bottom: 2rem;
        }
    </style>

    <script type="text/babel">
        const { useState, useEffect, useRef } = React;

        const ScrollArrow = ({ delay = 0, onClick }) => {
            const topPosition = delay === 0 ? '10px' : '40px';
            const animationDelay = delay === 0 ? '0s' : '0.15s';
            
            const arrowStyle = {
                top: topPosition,
                animationDelay: animationDelay,
                filter: 'drop-shadow(0 0 10px rgba(246, 231, 156, 0.3))'
            };
            
            return (
                <div 
                    className="scroll-arrow w-8 h-8 md:w-10 md:h-10 bg-transparent z-20 absolute left-1/2 transform -translate-x-1/2 border-0 border-r-3 border-b-3 md:border-r-4 md:border-b-4 border-yellow-200 rotate-45 opacity-0 cursor-pointer hover:border-yellow-100 transition-all duration-300"
                    style={arrowStyle}
                    onClick={onClick}
                />
            );
        };

        const HeroSection = () => {
            const scrollToHandbook = () => {
                document.getElementById('handbook-section')?.scrollIntoView({
                    behavior: 'smooth'
                });
            };

            const titleDecorationStyle = {
                background: 'linear-gradient(90deg, transparent, #F6E79C, transparent)'
            };

            const titleStyle = {
                fontFamily: 'Royal Couture, serif',
                textShadow: '0 0 20px rgba(246, 231, 156, 0.3), 0 0 40px rgba(246, 231, 156, 0.1)',
                wordBreak: 'break-word',
                overflowWrap: 'break-word'
            };

            const descriptionStyle = {
                fontFamily: 'lavish, sans-serif',
                textShadow: '0 2px 4px rgba(0,0,0,0.3)',
                wordBreak: 'break-word',
                overflowWrap: 'break-word'
            };

            return (
                <section className="flex min-h-screen flex-col justify-center items-center text-center p-4 pt-16 sm:pt-8 relative z-10 overflow-x-hidden">
                    <div className="flex flex-col items-center justify-center text-center w-full max-w-5xl mx-auto px-4 sm:px-8 py-8 sm:py-16 relative transition-all duration-1000">
                        <div 
                            className="absolute top-8 left-1/2 transform -translate-x-1/2 w-48 h-0.5 opacity-60"
                            style={titleDecorationStyle}
                        />
                        
                        <h1 
                            data-aos="fade-up"
                            data-aos-delay="100"
                            data-aos-duration="1000"
                            className="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-8 tracking-wider text-yellow-200 leading-tight font-serif relative z-20 px-2 break-words text-center"
                            style={titleStyle}
                        >
                            PODCAST COMPETITION
                        </h1>
                        
                        <div className="w-24 h-px bg-yellow-200 mx-auto mb-8 opacity-70" />
                        
                        <p 
                            data-aos="fade-up"
                            data-aos-delay="300"
                            data-aos-duration="1000"
                            className="text-base sm:text-lg md:text-xl lg:text-2xl max-w-4xl mb-12 text-gray-200 leading-relaxed font-sans text-center px-4 break-words"
                            style={descriptionStyle}
                        >
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        
                        <div 
                            className="relative mt-16 h-20 w-full"
                            data-aos="fade-up"
                            data-aos-delay="500"
                            data-aos-duration="1000"
                        >
                            <ScrollArrow delay={0} onClick={scrollToHandbook} />
                            <ScrollArrow delay={0.15} onClick={scrollToHandbook} />
                        </div>
                    </div>
                </section>
            );
        };

        const HandbookSection = () => {
            const sectionStyle = { background: 'transparent' };
            
            const titleStyle = {
                fontFamily: 'Royal Couture, serif',
                textShadow: '0 0 15px rgba(246, 231, 156, 0.3)',
                wordBreak: 'break-word',
                overflowWrap: 'break-word'
            };

            const descriptionStyle = {
                fontFamily: 'lavish, sans-serif',
                wordBreak: 'break-word',
                overflowWrap: 'break-word'
            };

            return (
                <section 
                    id="handbook-section"
                    className="flex min-h-screen flex-col justify-center items-center py-8 sm:py-16 px-4 sm:px-8 relative overflow-x-hidden"
                    style={sectionStyle}
                >
                    <div className="flex flex-col items-center justify-center w-full max-w-4xl mx-auto relative z-10">
                        <div 
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-offset="200"
                            className="w-full flex flex-col items-center text-center p-12"
                        >
                            <h2 
                                className="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-8 tracking-wider text-yellow-200 leading-tight break-words text-center"
                                style={titleStyle}
                            >
                                HANDBOOK
                            </h2>
                            
                            <div className="w-20 h-0.5 bg-yellow-200 mx-auto mb-8 opacity-80" />
                            
                            <p 
                                className="text-lg md:text-xl max-w-4xl text-gray-200 leading-relaxed break-words text-center"
                                style={descriptionStyle}
                            >
                                handbook disini
                            </p>
                        </div>
                    </div>
                </section>
            );
        };

        const JudgeCard = ({ name, description, imageUrl, delay = 0, flipDirection = 'left' }) => {
            const photoContainerStyle = {
                background: 'linear-gradient(135deg, #2D3B28 0%, #1A2517 100%)',
                boxShadow: '0 0 30px rgba(246, 231, 156, 0.2), inset 0 0 30px rgba(246, 231, 156, 0.1)'
            };

            const nameStyle = {
                fontFamily: 'Royal Couture, serif',
                textShadow: '0 2px 8px rgba(246, 231, 156, 0.3)'
            };

            const descriptionStyle = {
                fontFamily: 'lavish, sans-serif',
                wordBreak: 'break-word',
                overflowWrap: 'break-word'
            };

            return (
                <div 
                    data-judge-container
                    data-aos={`flip-${flipDirection}`}
                    data-aos-duration="1000"
                    data-aos-delay={delay}
                    data-aos-offset="200"
                    className="flex flex-col items-center text-center p-8 transition-all duration-300"
                >
                    <div 
                        data-judge-photo
                        className="w-44 h-44 md:w-56 md:h-56 rounded-full flex items-center justify-center mb-8 border-4 border-yellow-200 relative overflow-hidden"
                        style={photoContainerStyle}
                    >
                        <img src={imageUrl} alt={name} className="w-full h-full object-cover" />
                    </div>
                    
                    <h3 
                        className="text-2xl font-bold text-yellow-200 mb-2"
                        style={nameStyle}
                    >
                        {name}
                    </h3>
                    
                    <p 
                        className="text-base sm:text-lg text-gray-200 max-w-72 leading-relaxed break-words text-center"
                        style={descriptionStyle}
                    >
                        {description}
                    </p>
                </div>
            );
        };

        const JudgesSection = () => {
            const sectionStyle = { background: 'transparent' };
            
            const backgroundStyle = {
                backgroundImage: `
                    radial-gradient(circle at 30% 70%, rgba(246, 231, 156, 0.08) 0%, transparent 50%),
                    radial-gradient(circle at 70% 30%, rgba(246, 231, 156, 0.06) 0%, transparent 50%)
                `
            };

            const titleStyle = {
                fontFamily: 'Royal Couture, serif',
                textShadow: '0 0 20px rgba(246, 231, 156, 0.3)',
                wordBreak: 'break-word',
                overflowWrap: 'break-word'
            };

            const decorationStyle = {
                background: 'linear-gradient(90deg, transparent, #F6E79C, transparent)'
            };

            const challengeStyle = {
                fontFamily: 'Royal Couture, serif',
                textShadow: '0 0 25px rgba(246, 231, 156, 0.4), 0 0 50px rgba(246, 231, 156, 0.2)',
                wordBreak: 'break-word',
                overflowWrap: 'break-word'
            };

            const priceStyle = {
                fontFamily: 'Royal Couture, serif',
                textShadow: '0 0 30px rgba(246, 231, 156, 0.6), 0 0 60px rgba(246, 231, 156, 0.3)',
                wordBreak: 'break-word',
                overflowWrap: 'break-word'
            };

            const buttonStyle = {
                background: 'linear-gradient(135deg, #F6E79C 0%, #E6D17A 50%, #D4C05A 100%)',
                boxShadow: '0 8px 32px rgba(246, 231, 156, 0.3), inset 0 2px 16px rgba(255, 255, 255, 0.2)',
                fontFamily: 'Royal Couture, serif',
                transition: 'all 0.3s ease',
                border: '2px solid transparent',
                backgroundClip: 'padding-box'
            };

            const descriptionStyle = {
                fontFamily: 'lavish, sans-serif',
                wordBreak: 'break-word',
                overflowWrap: 'break-word'
            };

            return (
                <section 
                    id="judges-section"
                    className="flex min-h-screen flex-col justify-center items-center py-16 px-4 sm:px-8 relative overflow-x-hidden"
                    style={sectionStyle}
                >
                    <div 
                        className="absolute inset-0 pointer-events-none"
                        style={backgroundStyle}
                    />
                    
                    <div className="flex flex-col items-center justify-center w-full max-w-4xl mx-auto text-center relative z-10">
                        <h2 
                            data-aos="zoom-in"
                            data-aos-duration="1000"
                            data-aos-offset="200"
                            className="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4 tracking-wider text-yellow-200 leading-tight break-words text-center"
                            style={titleStyle}
                        >
                            JUDGES
                        </h2>
                        
                        <div 
                            className="w-32 h-0.5 mx-auto mb-16 opacity-80"
                            style={decorationStyle}
                        />
                        
                        <div className="flex flex-col md:flex-row justify-center items-center gap-8 md:gap-12 lg:gap-20 flex-wrap w-full mb-12 px-4">
                            <JudgeCard 
                                name="Nama juri 1"
                                description="Deskripsi buat juri 1?"
                                imageUrl="{{ asset('images/judges/judge1.png') }}"
                                delay="100"
                                flipDirection="left"
                            />
                            <JudgeCard 
                                name="Nama juri 2"
                                description="Deskripsi buat juri 2?"
                                imageUrl="{{ asset('images/judges/judge2.png') }}"
                                delay="300"
                                flipDirection="right"
                            />
                        </div>
                        
                        <div 
                            data-aos="zoom-in"
                            data-aos-duration="1000"
                            data-aos-delay="400"
                            data-aos-offset="150"
                            className="bg-black bg-opacity-20 backdrop-blur-sm border-2 border-yellow-200 border-opacity-30 rounded-3xl p-8 md:p-12 mb-12 max-w-2xl mx-auto"
                        >
                            <h3 
                                className="text-xl md:text-2xl font-bold text-yellow-200 mb-6"
                                style={titleStyle}
                            >
                                Registration Fee
                            </h3>
                            
                            <div 
                                className="text-4xl md:text-5xl lg:text-6xl font-bold text-yellow-200 mb-6" 
                                style={priceStyle}
                            >
                                RP50,000
                            </div>
                            
                            <button 
                                data-aos="fade-up"
                                data-aos-delay="600"
                                data-aos-duration="800"
                                className="px-8 py-4 md:px-12 md:py-5 text-lg md:text-xl font-bold text-black rounded-full transform hover:scale-105 hover:shadow-2xl transition-all duration-300 uppercase tracking-wider"
                                style={buttonStyle}
                                onMouseEnter={(e) => {
                                    e.target.style.transform = 'scale(1.05)';
                                    e.target.style.boxShadow = '0 12px 40px rgba(246, 231, 156, 0.4), inset 0 2px 16px rgba(255, 255, 255, 0.3)';
                                }}
                                onMouseLeave={(e) => {
                                    e.target.style.transform = 'scale(1)';
                                    e.target.style.boxShadow = '0 8px 32px rgba(246, 231, 156, 0.3), inset 0 2px 16px rgba(255, 255, 255, 0.2)';
                                }}
                            >
                                Register Now
                            </button>
                        </div>
                        
                        <div 
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="500"
                            data-aos-offset="100"
                            className="text-center mb-12"
                        >
                        </div>
                        
                        <div 
                            data-aos="zoom-in-up"
                            data-aos-duration="1000"
                            data-aos-delay="200"
                            data-aos-offset="150"
                            className="mt-8 text-center p-12"
                        >
                            <div className="w-24 h-0.5 bg-yellow-200 mx-auto mb-8 opacity-80" />
                            
                            <h2 
                                className="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold text-yellow-200 leading-tight tracking-wider mb-4 break-words text-center px-4"
                                style={challengeStyle}
                            >
                                Ready to take the challenge?
                            </h2>
                            
                            <div className="w-24 h-0.5 bg-yellow-200 mx-auto mt-4 opacity-80" />
                        </div>
                    </div>
                </section>
            );
        };

        const PodcastApp = () => {
            useEffect(() => {
                if (typeof AOS !== 'undefined') {
                    AOS.init({
                        duration: 1000,
                        easing: 'ease-out-cubic',
                        once: true,
                        offset: 120,
                        delay: 0,
                        mirror: false,
                        anchorPlacement: 'top-bottom'
                    });
                }
            }, []);

            const containerStyle = {
                background: 'transparent',
                marginBottom: '0',
                paddingBottom: '2rem'
            };

            const backgroundStyle = { backgroundImage: 'none' };

            return (
                <div 
                    className="min-h-screen w-full relative overflow-x-hidden"
                    style={containerStyle}
                >
                    <div 
                        className="absolute inset-0 pointer-events-none"
                        style={backgroundStyle}
                    />
                    
                    <HeroSection />
                    <HandbookSection />
                    <JudgesSection />
                </div>
            );
        };

        const root = ReactDOM.createRoot(document.getElementById('podcast-root'));
        root.render(<PodcastApp />);
    </script>
@endsection
