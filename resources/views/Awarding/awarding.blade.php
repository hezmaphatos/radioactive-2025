@extends('layouts.main')

@section('container')

    <div id="awarding-app"></div>

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

        .text-glow {
            text-shadow: 
                0 0 10px rgba(246, 231, 156, 0.5),
                0 0 20px rgba(246, 231, 156, 0.3),
                0 0 30px rgba(246, 231, 156, 0.2);
        }

        .golden-gradient {
            background: linear-gradient(135deg, #E3B74B 0%, #F6E79C 50%, #E3B74B 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .card-glow {
            box-shadow: 
                0 0 30px rgba(246, 231, 156, 0.2),
                inset 0 0 30px rgba(246, 231, 156, 0.1);
        }

        .button-glow {
            box-shadow: 
                0 0 20px rgba(246, 231, 156, 0.3),
                0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .section-pattern {
            background-image: 
                radial-gradient(circle at 20% 80%, rgba(246, 231, 156, 0.05) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(246, 231, 156, 0.03) 0%, transparent 50%);
        }

        .floating-logo {
            animation: float-and-glow 3s ease-in-out infinite;
        }

        @keyframes float-and-glow {
            0% {
                transform: translateY(0px);
                filter: drop-shadow(0 0 20px rgba(246, 231, 156, 0.6)) 
                        drop-shadow(0 0 40px rgba(227, 183, 75, 0.4)) 
                        drop-shadow(0 0 60px rgba(246, 231, 156, 0.3));
            }
            50% {
                transform: translateY(-15px);
                filter: drop-shadow(0 0 30px rgba(246, 231, 156, 0.8)) 
                        drop-shadow(0 0 60px rgba(227, 183, 75, 0.6)) 
                        drop-shadow(0 0 90px rgba(246, 231, 156, 0.5));
            }
            100% {
                transform: translateY(0px);
                filter: drop-shadow(0 0 20px rgba(246, 231, 156, 0.6)) 
                        drop-shadow(0 0 40px rgba(227, 183, 75, 0.4)) 
                        drop-shadow(0 0 60px rgba(246, 231, 156, 0.3));
            }
        }

        .hanging-plant-left {
            animation: hanging-sway-left 6s ease-in-out infinite;
            transform-origin: top center;
        }

        .hanging-plant-right {
            animation: hanging-sway-right 5.5s ease-in-out infinite;
            transform-origin: top center;
        }

        @keyframes hanging-sway-left {
            0%, 100% {
                transform: rotate(-2deg);
            }
            50% {
                transform: rotate(2deg);
            }
        }

        @keyframes hanging-sway-right {
            0%, 100% {
                transform: rotate(2deg) scaleX(-1);
            }
            50% {
                transform: rotate(-2deg) scaleX(-1);
            }
        }
    </style>

    <script type="text/babel">
        const { useState, useEffect, useRef } = React;

        const LoadingScreen = ({ isVisible, onComplete }) => {
            useEffect(() => {
                if (isVisible) {
                    const timer = setTimeout(() => {
                        onComplete();
                    }, 3000);
                    return () => clearTimeout(timer);
                }
            }, [isVisible, onComplete]);

            if (!isVisible) return null;

            const gradientStyle = {
                background: 'linear-gradient(135deg, #405036 0%, #2D3B28 50%, #1A2517 100%)'
            };

            return (
                <div className="fixed inset-0 z-50 flex items-center justify-center p-4 opacity-100 transition-opacity duration-500" 
                     style={gradientStyle}>
                    <div className="w-full max-w-sm sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl flex justify-center">
                        <img src="{{ asset('images/LOGO_RADIOACTIVE2025.png') }}" 
                             alt="Radioactive Logo" 
                             className="w-full h-auto max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-xl drop-shadow-2xl animate-pulse" />
                    </div>
                </div>
            );
        };

        const HeroSection = () => {
            const scrollToDescription = () => {
                document.getElementById('description')?.scrollIntoView({behavior: 'smooth'});
            };

            const gradientOverlayStyle = {
                background: 'linear-gradient(to top, rgba(64, 80, 54, 0.8), rgba(64, 80, 54, 0.4), transparent)'
            };

            return (
                <section className="relative h-screen w-full overflow-hidden">
                    <div className="absolute inset-0 z-0">
                        <video 
                            autoPlay 
                            muted 
                            loop 
                            playsInline
                            className="w-full h-full object-cover"
                        >
                            <source src="{{ asset('images/awarding/jadi.mp4') }}" type="video/mp4" />
                            Your browser does not support the video tag.
                        </video>
                    </div>

                    <div className="absolute top-0 left-0 z-20 w-48 h-48 xs:w-56 xs:h-56 sm:w-56 sm:h-56 md:w-80 md:h-80 lg:w-96 lg:h-96 xl:w-[450px] xl:h-[450px] pointer-events-none -ml-4 xs:-ml-6 sm:-ml-5 md:-ml-8 -mt-6 xs:-mt-8 sm:-mt-5 md:-mt-8" 
                         data-aos="fade-right" data-aos-duration="1200" data-aos-delay="600">
                        <img src="{{ asset('images/GANTUNG1.png') }}" 
                             alt="Tanaman Gantung" 
                             className="w-full h-full object-contain opacity-80 m-0 p-0 hanging-plant-left" />
                    </div>

                    <div className="absolute top-0 right-0 z-20 w-48 h-48 xs:w-56 xs:h-56 sm:w-56 sm:h-56 md:w-80 md:h-80 lg:w-96 lg:h-96 xl:w-[450px] xl:h-[450px] pointer-events-none -mr-4 xs:-mr-6 sm:-mr-5 md:-mr-8 -mt-6 xs:-mt-8 sm:-mt-5 md:-mt-8" 
                         data-aos="fade-left" data-aos-duration="1200" data-aos-delay="600">
                        <img src="{{ asset('images/GANTUNG1.png') }}" 
                             alt="Tanaman Gantung" 
                             className="w-full h-full object-contain opacity-100 m-0 p-0 hanging-plant-right" />
                    </div>

                    <div className="absolute bottom-0 left-0 right-0 h-32 z-5" 
                         style={gradientOverlayStyle}></div>

                    <div className="relative z-10 flex items-center justify-center h-full">
                        <div className="text-center px-4 max-w-6xl mx-auto w-full relative">
                            <div className="flex justify-center -mt-24 xs:-mt-28 sm:-mt-12 md:-mt-16 lg:-mt-20 xl:-mt-24" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                <img src="{{ asset('images/LOGO_RADIOACTIVE2025.png') }}" 
                                     alt="Radioactive Logo" 
                                     className="w-64 xs:w-72 sm:w-80 md:w-96 lg:w-[500px] xl:w-[600px] h-auto max-w-full floating-logo" />
                            </div>
                            
                            <div className="absolute left-0 right-0 top-[calc(50%+20px)] xs:top-[calc(50%+30px)] sm:top-[calc(50%+40px)] md:top-[calc(50%+60px)] lg:top-[calc(50%+80px)] xl:top-[calc(50%+100px)] flex flex-col sm:flex-row gap-4 justify-center items-center px-2" 
                                 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                                <CustomButton 
                                    text="BUY TICKETS"
                                    variant="primary"
                                    //onClick={() => window.location.href = 'https://example.com/tickets'} // Nanti diganti link pembelian tiket
                                />
                                <CustomButton 
                                    text="READ MORE"
                                    variant="secondary"
                                    onClick={scrollToDescription}
                                />
                            </div>
                        </div>
                    </div>
                </section>
            );
        };

        const CustomButton = ({ text, variant = 'primary', onClick }) => {
            const [isHovered, setIsHovered] = useState(false);

            const getButtonStyles = () => {
                if (variant === 'primary') {
                    return {
                        backgroundColor: isHovered ? '#F6E79C' : '#E3B74B',
                        color: '#405036',
                        borderColor: isHovered ? '#E3B74B' : '#F6E79C'
                    };
                } else {
                    return {
                        backgroundColor: isHovered ? '#405036' : 'rgba(64, 80, 54, 0.8)',
                        color: '#F6E79C',
                        borderColor: isHovered ? '#E3B74B' : 'rgba(246, 231, 156, 0.2)'
                    };
                }
            };

            return (
                <button 
                    className="font-royale-serif py-4 px-6 sm:px-8 rounded-lg text-base sm:text-lg md:text-xl transition-all duration-300 transform hover:scale-105 shadow-2xl border-2 uppercase tracking-wide button-glow w-full sm:w-auto max-w-[200px] sm:max-w-xs"
                    style={getButtonStyles()}
                    onMouseEnter={() => setIsHovered(true)}
                    onMouseLeave={() => setIsHovered(false)}
                    onClick={onClick}
                >
                    {text}
                </button>
            );
        };

        const DescriptionSection = () => {
            const sectionStyle = {
                backgroundColor: 'transparent'
            };

            const textStyle = {
                color: '#F6E79C'
            };

            const decorationStyle = {
                background: 'linear-gradient(90deg, transparent, #F6E79C, transparent)'
            };

            return (
                <section id="description" className="py-16 md:py-24 overflow-x-hidden" 
                         style={sectionStyle}>
                    <div className="max-w-6xl mx-auto px-4 text-center w-full">
                        
                        <div className="w-32 h-0.5 mx-auto mb-5 opacity-80"
                             style={decorationStyle}></div>
                    
                        <h2 className="font-royale-serif text-2xl sm:text-3xl md:text-5xl lg:text-6xl xl:text-7xl mb-8 tracking-wide text-glow golden-gradient break-words" 
                            data-aos="fade-up" data-aos-duration="800">
                            AWARDING NIGHT
                        </h2>
                        
                        <div className="w-32 h-0.5 mx-auto mb-15 opacity-80"
                             style={decorationStyle}></div>

                        <div className="space-y-6 max-w-4xl mx-auto w-full">
                            <p className="font-lavish text-sm sm:text-base md:text-lg lg:text-xl leading-relaxed break-words" 
                               style={textStyle} 
                               data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, aut sapiente quos exercitationem illo sit delectus officia dolore quo saepe inventore temporibus animi quam vero deserunt molestias aspernatur? Fugit, id? Lorem ipsum dolor sit amet consectetur adipisicing elit. Est autem, beatae, voluptatum amet quidem omnis aspernatur necessitatibus placeat numquam perferendis modi sequi sed. Dignissimos possimus tempora ea suscipit harum nihil.
                            </p>
                            
                            <p className="font-lavish text-sm sm:text-base md:text-lg lg:text-xl leading-relaxed break-words" 
                               style={textStyle} 
                               data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Non nesciunt illum dolorem mollitia ullam, recusandae delectus sunt temporibus nihil corporis, quasi eius illo, saepe error id sapiente ea deleniti aliquam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum laudantium soluta praesentium aspernatur, in aut numquam adipisci suscipit unde libero nulla itaque odio quisquam similique aliquam quidem quod nobis quos.
                            </p>
                        </div>
                    </div>
                </section>
            );
        };

        const GuestStar = ({ number, image, title, descriptions, isReverse = false, bgColor = 'transparent' }) => {
            const sectionStyle = {
                backgroundColor: bgColor
            };

            const textStyle = {
                color: '#F6E79C'
            };

            const cardStyle = {
                background: 'linear-gradient(135deg, #405036, #5A6B4A)', 
                border: '3px solid #E3B74B'
            };

            const decorationStyle = {
                background: 'linear-gradient(90deg, transparent, #F6E79C, transparent)'
            };

            return (
                <section className="py-16 md:py-24 overflow-x-hidden" style={sectionStyle}>
                    <div className="max-w-6xl mx-auto px-4 w-full">
                        {number === 1 && (
                            <div className="text-center mb-16">
                                <h2 className="font-royale-serif text-3xl sm:text-4xl md:text-6xl lg:text-7xl xl:text-8xl tracking-wide text-glow break-words" 
                                    style={textStyle} 
                                    data-aos="zoom-in" data-aos-duration="1000">
                                    GUEST <span className="golden-gradient">STAR</span>
                                </h2>
                                <div className="w-32 h-0.5 mx-auto mb-15 opacity-80"
                                     style={decorationStyle}></div>
                            </div>
                            
                        )}
                        
                        <div className={`flex flex-col ${isReverse ? 'lg:flex-row-reverse' : 'lg:flex-row'} items-center gap-6 lg:gap-8 w-full`}>
                            <div className={`lg:w-1/2 flex justify-center ${isReverse ? 'lg:justify-start lg:pl-4' : 'lg:justify-end lg:pr-4'} w-full`} 
                                 data-aos={isReverse ? "fade-left" : "fade-right"} data-aos-duration="1000">
                                <div className="relative rounded-3xl overflow-hidden shadow-2xl w-64 h-80 sm:w-80 sm:h-96 md:w-96 md:h-[500px] card-glow flex-shrink-0" 
                                     style={cardStyle}>
                                    <div className="w-full h-full flex items-center justify-center p-4 sm:p-6">
                                        <img src={image} 
                                             alt={`Guest Star ${number}`} 
                                             className="w-full h-full object-contain" />
                                    </div>
                                </div>
                            </div>
                            
                            <div className={`lg:w-1/2 text-center ${isReverse ? 'lg:text-right lg:pr-4' : 'lg:text-left lg:pl-4'} w-full`} 
                                 data-aos={isReverse ? "fade-right" : "fade-left"} data-aos-duration="1000" data-aos-delay="200">
                                <h2 className="font-royale-serif text-2xl sm:text-3xl md:text-5xl lg:text-6xl mb-8 tracking-wide text-glow break-words" 
                                    style={textStyle}>
                                    GUEST<br />
                                    <span className="golden-gradient">{title}</span>
                                </h2>
                                
                                <div className="space-y-6">
                                    {descriptions.map((desc, index) => (
                                        <p key={index} className="font-lavish text-sm sm:text-base md:text-lg lg:text-xl leading-relaxed break-words" 
                                           style={textStyle}>
                                            {desc}
                                        </p>
                                    ))}
                                </div>
                            </div>
                        </div>
                        
                        {number === 2 && (
                            <div className="text-center mt-12 w-full">
                                <div data-aos="fade-up" data-aos-duration="600" data-aos-delay="0" data-aos-offset="20">
                                    <CustomButton 
                                        text="GET YOUR TICKET NOW"
                                        variant="primary"
                                        //onClick={() => window.location.href = 'https://example.com/tickets'} // Nanti diganti link pembelian tiket
                                    />
                                </div>
                            </div>
                        )}
                    </div>
                </section>
            );
        };

        const AwardingApp = () => {
            const [showLoading, setShowLoading] = useState(true);
            const [showMainContent, setShowMainContent] = useState(false);

            const handleLoadingComplete = () => {
                setShowLoading(false);
                setTimeout(() => {
                    setShowMainContent(true);
                    if (typeof AOS !== 'undefined') {
                        AOS.init({
                            duration: 1000,
                            easing: 'ease-in-out',
                            once: true,
                            offset: 120,
                            delay: 0,
                            mirror: false,
                            anchorPlacement: 'top-bottom'
                        });
                    }
                }, 500);
            };

            const guestStarData = [
                {
                    number: 1,
                    image: "{{ asset('awarding/guest_star_1.png') }}",
                    title: "STAR 1",
                    descriptions: [
                        "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur libero repellat dignissimos beatae quibusdam debitis expedita, dolores praesentium aliquam ab ipsa animi error temporibus sed sint, atque amet pariatur illo?",
                        "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur libero repellat dignissimos beatae quibusdam debitis expedita, dolores praesentium aliquam ab ipsa animi error temporibus sed sint, atque amet pariatur illo?"
                    ],
                    isReverse: false,
                    bgColor: 'transparent'
                },
                {
                    number: 2,
                    image: "{{ asset('awarding/guest_star_2.png') }}",
                    title: "STAR 2",
                    descriptions: [
                        "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur libero repellat dignissimos beatae quibusdam debitis expedita, dolores praesentium aliquam ab ipsa animi error temporibus sed sint, atque amet pariatur illo?",
                        "Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa voluptatibus illo quam architecto ducimus, natus enim, eaque odit fugit obcaecati quisquam dolore exercitationem eum. Esse tempore necessitatibus voluptas! Possimus, consequuntur!"
                    ],
                    isReverse: true,
                    bgColor: 'transparent'
                }
            ];

            return (
                <React.Fragment>
                    <LoadingScreen isVisible={showLoading} onComplete={handleLoadingComplete} />
                    
                    <div className={`${showMainContent ? 'opacity-100' : 'opacity-0'} transition-opacity duration-1000 overflow-x-hidden`}>
                        <HeroSection />
                        <DescriptionSection />
                        {guestStarData.map((guest) => (
                            <GuestStar 
                                key={guest.number}
                                number={guest.number}
                                image={guest.image}
                                title={guest.title}
                                descriptions={guest.descriptions}
                                isReverse={guest.isReverse}
                                bgColor={guest.bgColor}
                            />
                        ))}
                    </div>
                </React.Fragment>
            );
        };

        const root = ReactDOM.createRoot(document.getElementById('awarding-app'));
        root.render(<AwardingApp />);
    </script>
@endsection
