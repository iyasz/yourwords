<style scoped>
    @keyframes fade-in-out {
        0% {
            opacity: 0;
        }
        10% {
            opacity: 1;
        }
        90% {
            opacity: 1;
        }
        100% {
            opacity: 0;
            display: none
        }
    }
    
    .wrapper-toast {
        animation: fade-in-out 3s ease-in-out forwards;
    }
    </style>
    
    <div class="wrapper-toast flex justify-center items-center fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
        <div class="bg-zinc-900 p-3 rounded-md border-2 border-zinc-400 text-center">
            <h1 class="text-white text-[14px]">{{ $slot }}</h1>
        </div>
    </div>
    