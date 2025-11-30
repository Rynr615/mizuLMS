        <!-- Animated Background Elements -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <!-- Floating Bubbles -->
            <div class="bubble bubble-1"></div>
            <div class="bubble bubble-2"></div>
            <div class="bubble bubble-3"></div>
            <div class="bubble bubble-4"></div>
            <div class="bubble bubble-5"></div>

            <!-- Wave Animation -->
            <div class="wave wave-1"></div>
            <div class="wave wave-2"></div>
            <div class="wave wave-3"></div>
        </div>

        <style>
            /* Animated Water Bubbles */
            .bubble {
                position: absolute;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.1);
                backdrop-filter: blur(5px);
                animation: float 20s infinite ease-in-out;
            }

            .bubble-1 {
                width: 80px;
                height: 80px;
                left: 10%;
                top: 20%;
                animation-delay: 0s;
                animation-duration: 15s;
            }

            .bubble-2 {
                width: 60px;
                height: 60px;
                left: 70%;
                top: 60%;
                animation-delay: 2s;
                animation-duration: 18s;
            }

            .bubble-3 {
                width: 100px;
                height: 100px;
                left: 80%;
                top: 10%;
                animation-delay: 4s;
                animation-duration: 20s;
            }

            .bubble-4 {
                width: 50px;
                height: 50px;
                left: 20%;
                top: 70%;
                animation-delay: 1s;
                animation-duration: 16s;
            }

            .bubble-5 {
                width: 70px;
                height: 70px;
                left: 50%;
                top: 40%;
                animation-delay: 3s;
                animation-duration: 17s;
            }

            @keyframes float {

                0%,
                100% {
                    transform: translateY(0) translateX(0) scale(1);
                }

                25% {
                    transform: translateY(-20px) translateX(10px) scale(1.1);
                }

                50% {
                    transform: translateY(-40px) translateX(-10px) scale(0.9);
                }

                75% {
                    transform: translateY(-20px) translateX(10px) scale(1.05);
                }
            }

            /* Wave Animation */
            .wave {
                position: absolute;
                bottom: 0;
                left: 0;
                width: 200%;
                height: 100px;
                background: rgba(255, 255, 255, 0.05);
                border-radius: 50%;
                animation: wave 25s infinite linear;
            }

            .wave-1 {
                animation-delay: 0s;
                opacity: 0.4;
            }

            .wave-2 {
                animation-delay: -5s;
                opacity: 0.3;
                animation-duration: 20s;
            }

            .wave-3 {
                animation-delay: -10s;
                opacity: 0.2;
                animation-duration: 30s;
            }

            @keyframes wave {
                0% {
                    transform: translateX(0) translateY(0);
                }

                100% {
                    transform: translateX(-50%) translateY(10px);
                }
            }
        </style>
