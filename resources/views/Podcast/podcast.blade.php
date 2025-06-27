@extends('layouts.main')

@section('container')

    <div id="podcast-root"></div>

    <script crossorigin src="https://unpkg.com/react@18/umd/react.production.min.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@18/umd/react-dom.production.min.js"></script>
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    @vite(['resources/css/app.css'])
    
    <script>

        const createPodcastComponent = () => {
            return React.createElement('div', {
                className: 'min-h-screen w-full relative overflow-hidden',
                style: {
                    background: 'linear-gradient(135deg, #405036 0%, #2D3B28 50%, #1A2517 100%)'
                }
            }, [
                React.createElement('div', {
                    key: 'bg-decoration',
                    className: 'absolute inset-0 pointer-events-none',
                    style: {
                        backgroundImage: `
                            radial-gradient(circle at 20% 80%, rgba(246, 231, 156, 0.1) 0%, transparent 50%),
                            radial-gradient(circle at 80% 20%, rgba(246, 231, 156, 0.08) 0%, transparent 50%),
                            radial-gradient(circle at 40% 40%, rgba(246, 231, 156, 0.05) 0%, transparent 50%)
                        `
                    }
                }),                
                React.createElement('section', {
                    key: 'hero-section',
                    className: 'flex min-h-screen flex-col justify-center items-center text-center p-4 relative z-10'
                }, [
                    React.createElement('div', {
                        key: 'content',
                        className: 'flex flex-col items-center justify-center text-center w-full max-w-5xl mx-auto px-8 py-16 relative transition-all duration-1000'
                    }, [
                        React.createElement('div', {
                            key: 'title-decoration',
                            className: 'absolute top-8 left-1/2 transform -translate-x-1/2 w-48 h-0.5 opacity-60',
                            style: {
                                background: 'linear-gradient(90deg, transparent, #F6E79C, transparent)'
                            }
                        }),
                        
                        React.createElement('h1', {
                            key: 'title',
                            'data-aos': 'fade-up',
                            'data-aos-delay': '100',
                            'data-aos-duration': '1000',
                            className: 'text-4xl md:text-5xl lg:text-6xl font-bold mb-8 tracking-widest text-yellow-200 leading-tight font-serif relative z-20',
                            style: {
                                fontFamily: 'Royal Couture, serif',
                                textShadow: '0 0 20px rgba(246, 231, 156, 0.3), 0 0 40px rgba(246, 231, 156, 0.1)'
                            }
                        }, 'PODCAST COMPETITION'),
                        
                        React.createElement('div', {
                            key: 'subtitle-decoration',
                            className: 'w-24 h-px bg-yellow-200 mx-auto mb-8 opacity-70'
                        }),
                        
                        React.createElement('p', {
                            key: 'description',
                            'data-aos': 'fade-up',
                            'data-aos-delay': '300',
                            'data-aos-duration': '1000',
                            className: 'text-lg md:text-xl lg:text-2xl max-w-4xl mb-12 text-gray-200 leading-relaxed font-sans text-center px-4',
                            style: {
                                fontFamily: 'lavish, sans-serif',
                                textShadow: '0 2px 4px rgba(0,0,0,0.3)'
                            }
                        }, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'),
                        
                        React.createElement('div', {
                            key: 'scroll-indicator',
                            className: 'relative mt-16 h-20 w-full',
                            'data-aos': 'fade-up',
                            'data-aos-delay': '500',
                            'data-aos-duration': '1000'
                        }, [
                            React.createElement('div', {
                                key: 'arrow1',
                                className: 'scroll-arrow w-8 h-8 md:w-10 md:h-10 bg-transparent z-20 absolute left-1/2 transform -translate-x-1/2 border-0 border-r-3 border-b-3 md:border-r-4 md:border-b-4 border-yellow-200 rotate-45 opacity-0 cursor-pointer hover:border-yellow-100 transition-all duration-300',
                                style: {
                                    top: '10px',
                                    filter: 'drop-shadow(0 0 10px rgba(246, 231, 156, 0.3))'
                                },
                                onClick: () => {
                                    document.getElementById('timeline-handbook-section').scrollIntoView({
                                        behavior: 'smooth'
                                    });
                                }
                            }),
                            React.createElement('div', {
                                key: 'arrow2', 
                                className: 'scroll-arrow w-8 h-8 md:w-10 md:h-10 bg-transparent z-20 absolute left-1/2 transform -translate-x-1/2 border-0 border-r-3 border-b-3 md:border-r-4 md:border-b-4 border-yellow-200 rotate-45 opacity-0 cursor-pointer hover:border-yellow-100 transition-all duration-300',
                                style: {
                                    top: '40px',
                                    animationDelay: '0.15s',
                                    filter: 'drop-shadow(0 0 10px rgba(246, 231, 156, 0.3))'
                                },
                                onClick: () => {
                                    document.getElementById('timeline-handbook-section').scrollIntoView({
                                        behavior: 'smooth'
                                    });
                                }
                            })
                        ])
                    ])
                ]),
                
                // Section buat timeline sama handbook nanti mau tanya kak hezki dulu bentukannya apa
                React.createElement('section', {
                    id: 'timeline-handbook-section',
                    className: 'flex min-h-screen flex-col justify-center items-center py-16 px-8 relative',
                    style: {
                        background: 'linear-gradient(135deg, #2D3B28 0%, #1F2B1C 50%, #405036 100%)'
                    }
                }, [
                    React.createElement('div', {
                        key: 'section-bg-pattern',
                        className: 'absolute inset-0 pointer-events-none',
                        style: {
                            backgroundImage: `
                                radial-gradient(circle at 25% 25%, rgba(246, 231, 156, 0.05) 0%, transparent 50%),
                                radial-gradient(circle at 75% 75%, rgba(246, 231, 156, 0.03) 0%, transparent 50%)
                            `
                        }
                    }),
                    
                    React.createElement('div', {
                        key: 'timeline-handbook-content',
                        className: 'flex flex-col items-center justify-center w-full max-w-4xl mx-auto gap-32 relative z-10'
                    }, [
                        // Timeline
                        React.createElement('div', {
                            key: 'timeline-section',
                            'data-aos': 'fade-right',
                            'data-aos-duration': '1000',
                            'data-aos-offset': '200',
                            className: 'w-full flex flex-col items-center text-center p-12'
                        }, [
                            React.createElement('h2', {
                                key: 'timeline-title',
                                className: 'text-4xl md:text-5xl lg:text-6xl font-bold mb-8 tracking-widest text-yellow-200 leading-tight',
                                style: {
                                    fontFamily: 'Royal Couture, serif',
                                    textShadow: '0 0 15px rgba(246, 231, 156, 0.3)'
                                }
                            }, 'TIMELINE'),
                            
                            React.createElement('div', {
                                key: 'timeline-decoration',
                                className: 'w-20 h-0.5 bg-yellow-200 mx-auto mb-8 opacity-80'
                            }),
                            
                            React.createElement('p', {
                                key: 'timeline-placeholder',
                                className: 'text-lg md:text-xl max-w-4xl text-gray-200 leading-relaxed',
                                style: {
                                    fontFamily: 'lavish, sans-serif'
                                }
                            }, 'timeline disini')
                        ]),
                        
                        // Handbook
                        React.createElement('div', {
                            key: 'handbook-section',
                            'data-aos': 'fade-left',
                            'data-aos-duration': '1000',
                            'data-aos-offset': '200',
                            className: 'w-full flex flex-col items-center text-center p-12'
                        }, [
                            React.createElement('h2', {
                                key: 'handbook-title',
                                className: 'text-4xl md:text-5xl lg:text-6xl font-bold mb-8 tracking-widest text-yellow-200 leading-tight',
                                style: {
                                    fontFamily: 'Royal Couture, serif',
                                    textShadow: '0 0 15px rgba(246, 231, 156, 0.3)'
                                }
                            }, 'HANDBOOK'),
                            
                            React.createElement('div', {
                                key: 'handbook-decoration',
                                className: 'w-20 h-0.5 bg-yellow-200 mx-auto mb-8 opacity-80'
                            }),
                            
                            React.createElement('p', {
                                key: 'handbook-placeholder',
                                className: 'text-lg md:text-xl max-w-4xl text-gray-200 leading-relaxed',
                                style: {
                                    fontFamily: 'lavish, sans-serif'
                                }
                            }, 'handbook disini')
                        ])
                    ])
                ]),
                
                // Section buat juri
                React.createElement('section', {
                    id: 'judges-section',
                    className: 'flex min-h-screen flex-col justify-center items-center py-16 px-8 relative',
                    style: {
                        background: 'linear-gradient(135deg, #405036 0%, #2D3B28 50%, #1A2517 100%)'
                    }
                }, [
                    React.createElement('div', {
                        key: 'judges-bg-decoration',
                        className: 'absolute inset-0 pointer-events-none',
                        style: {
                            backgroundImage: `
                                radial-gradient(circle at 30% 70%, rgba(246, 231, 156, 0.08) 0%, transparent 50%),
                                radial-gradient(circle at 70% 30%, rgba(246, 231, 156, 0.06) 0%, transparent 50%)
                            `
                        }
                    }),
                    
                    React.createElement('div', {
                        key: 'judges-content',
                        className: 'flex flex-col items-center justify-center w-full max-w-4xl mx-auto text-center relative z-10'
                    }, [
                        React.createElement('h2', {
                            key: 'judges-title',
                            'data-aos': 'zoom-in',
                            'data-aos-duration': '1000',
                            'data-aos-offset': '200',
                            className: 'text-4xl md:text-5xl lg:text-6xl font-bold mb-4 tracking-widest text-yellow-200 leading-tight',
                            style: {
                                fontFamily: 'Royal Couture, serif',
                                textShadow: '0 0 20px rgba(246, 231, 156, 0.3)'
                            }
                        }, 'JUDGES'),
                        
                        React.createElement('div', {
                            key: 'judges-title-decoration',
                            className: 'w-32 h-0.5 mx-auto mb-16 opacity-80',
                            style: {
                                background: 'linear-gradient(90deg, transparent, #F6E79C, transparent)'
                            }
                        }),
                        
                        React.createElement('div', {
                            key: 'judges-grid',
                            className: 'flex flex-col md:flex-row justify-center items-center gap-12 md:gap-20 flex-wrap w-full mb-12'
                        }, [
                            // Juri 1
                            React.createElement('div', {
                                key: 'judge-1',
                                'data-judge-container': true,
                                'data-aos': 'flip-left',
                                'data-aos-duration': '1000',
                                'data-aos-delay': '100',
                                'data-aos-offset': '200',
                                className: 'flex flex-col items-center text-center p-8 transition-all duration-300'
                            }, [
                                React.createElement('div', {
                                    key: 'judge-1-photo',
                                    'data-judge-photo': true,
                                    className: 'w-44 h-44 md:w-56 md:h-56 rounded-full flex items-center justify-center mb-8 border-4 border-yellow-200 relative overflow-hidden',
                                    style: {
                                        background: 'linear-gradient(135deg, #2D3B28 0%, #1A2517 100%)',
                                        boxShadow: '0 0 30px rgba(246, 231, 156, 0.2), inset 0 0 30px rgba(246, 231, 156, 0.1)'
                                    }
                                }),
                                
                                React.createElement('h3', {
                                    key: 'judge-1-name',
                                    className: 'text-2xl font-bold text-yellow-200 mb-2',
                                    style: {
                                        fontFamily: 'Royal Couture, serif',
                                        textShadow: '0 2px 8px rgba(246, 231, 156, 0.3)'
                                    }
                                }, 'Nama juri 1'),
                                
                                React.createElement('p', {
                                    key: 'judge-1-desc',
                                    className: 'text-lg text-gray-200 max-w-72 leading-relaxed',
                                    style: {
                                        fontFamily: 'lavish, sans-serif'
                                    }
                                }, 'Deskripsi buat juri 1?')
                            ]),
                            
                            // Juri 2
                            React.createElement('div', {
                                key: 'judge-2',
                                'data-judge-container': true,
                                'data-aos': 'flip-right',
                                'data-aos-duration': '1000',
                                'data-aos-delay': '300',
                                'data-aos-offset': '200',
                                className: 'flex flex-col items-center text-center p-8 transition-all duration-300'
                            }, [
                                React.createElement('div', {
                                    key: 'judge-2-photo',
                                    'data-judge-photo': true,
                                    className: 'w-44 h-44 md:w-56 md:h-56 rounded-full flex items-center justify-center mb-8 border-4 border-yellow-200 relative overflow-hidden',
                                    style: {
                                        background: 'linear-gradient(135deg, #2D3B28 0%, #1A2517 100%)',
                                        boxShadow: '0 0 30px rgba(246, 231, 156, 0.2), inset 0 0 30px rgba(246, 231, 156, 0.1)'
                                    }
                                }),
                                
                                React.createElement('h3', {
                                    key: 'judge-2-name',
                                    className: 'text-2xl font-bold text-yellow-200 mb-2',
                                    style: {
                                        fontFamily: 'Royal Couture, serif',
                                        textShadow: '0 2px 8px rgba(246, 231, 156, 0.3)'
                                    }
                                }, 'Nama juri 2'),
                                
                                React.createElement('p', {
                                    key: 'judge-2-desc',
                                    className: 'text-lg text-gray-200 max-w-72 leading-relaxed',
                                    style: {
                                        fontFamily: 'lavish, sans-serif'
                                    }
                                }, 'Deskripsi buat juri 2?')
                            ])
                        ]),
                        
                        React.createElement('div', {
                            key: 'challenge-text',
                            'data-aos': 'zoom-in-up',
                            'data-aos-duration': '1000',
                            'data-aos-delay': '200',
                            'data-aos-offset': '150',
                            className: 'mt-8 text-center p-12'
                        }, [
                            React.createElement('div', {
                                key: 'challenge-decoration-top',
                                className: 'w-24 h-0.5 bg-yellow-200 mx-auto mb-8 opacity-80'
                            }),
                            
                            React.createElement('h2', {
                                className: 'text-4xl md:text-5xl lg:text-7xl font-bold text-yellow-200 leading-tight tracking-wider mb-4',
                                style: {
                                    fontFamily: 'Royal Couture, serif',
                                    textShadow: '0 0 25px rgba(246, 231, 156, 0.4), 0 0 50px rgba(246, 231, 156, 0.2)'
                                }
                            }, 'Ready to take the challenge?'),
                            
                            React.createElement('div', {
                                key: 'challenge-decoration-bottom',
                                className: 'w-24 h-0.5 bg-yellow-200 mx-auto mt-4 opacity-80'
                            })
                        ])
                    ])
                ])
            ]);
        };

        document.addEventListener('DOMContentLoaded', function() {
            const element = document.getElementById('podcast-root');
            if (element && typeof React !== 'undefined' && typeof ReactDOM !== 'undefined') {
                const root = ReactDOM.createRoot(element);
                root.render(createPodcastComponent());
                
                setTimeout(() => {
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
                }, 100);
            }
        });
    </script>
    
    <style>
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
    </style>
@endsection