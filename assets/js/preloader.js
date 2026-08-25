// Preloader JavaScript
class PortfolioPreloader {
    constructor() {
        this.progress = 0;
        this.totalSteps = 100;
        this.stepDuration = 20;
        this.init();
    }

    init() {
        this.setupPreloader();
        this.startLoading();
    }

    setupPreloader() {
        // Create preloader elements if not present
        if (!document.querySelector('.preloader')) {
            const preloader = document.createElement('div');
            preloader.className = 'preloader';
            preloader.innerHTML = `
                <div class="preloader-content">
                    <div class="preloader-logo">Mathew<span>Paule</span></div>
                    <div class="preloader-percentage">0%</div>
                    <div class="preloader-progress">
                        <div class="preloader-bar"></div>
                    </div>
                    <div class="preloader-dots">
                        <div class="preloader-dot"></div>
                        <div class="preloader-dot"></div>
                        <div class="preloader-dot"></div>
                        <div class="preloader-dot"></div>
                    </div>
                </div>
            `;
            document.body.prepend(preloader);
        }

        this.preloader = document.querySelector('.preloader');
        this.progressBar = document.querySelector('.preloader-bar');
        this.percentage = document.querySelector('.preloader-percentage');
    }

    startLoading() {
        const interval = setInterval(() => {
            this.progress += 1;
            this.updateProgress();
            
            if (this.progress >= this.totalSteps) {
                clearInterval(interval);
                setTimeout(() => {
                    this.hidePreloader();
                }, 500);
            }
        }, this.stepDuration);
    }

    updateProgress() {
        if (this.progressBar) {
            this.progressBar.style.width = `${this.progress}%`;
        }
        
        if (this.percentage) {
            this.percentage.textContent = `${this.progress}%`;
        }
    }

    hidePreloader() {
        if (this.preloader) {
            this.preloader.classList.add('hidden');
            
            setTimeout(() => {
                this.preloader.style.display = 'none';
                
                // Trigger custom event when preloader is hidden
                document.dispatchEvent(new CustomEvent('preloaderHidden'));
            }, 500);
        }
    }

    // PIN Protection System (Optional)
    setupPinProtection() {
        const pinEntry = document.createElement('div');
        pinEntry.className = 'pin-entry';
        pinEntry.innerHTML = `
            <div class="pin-form">
                <h3>Enter PIN</h3>
                <input type="password" class="pin-input" maxlength="4" placeholder="****">
                <div class="pin-keyboard">
                    <button class="pin-key" data-key="1">1</button>
                    <button class="pin-key" data-key="2">2</button>
                    <button class="pin-key" data-key="3">3</button>
                    <button class="pin-key" data-key="4">4</button>
                    <button class="pin-key" data-key="5">5</button>
                    <button class="pin-key" data-key="6">6</button>
                    <button class="pin-key" data-key="7">7</button>
                    <button class="pin-key" data-key="8">8</button>
                    <button class="pin-key" data-key="9">9</button>
                    <button class="pin-key" data-key="0">0</button>
                    <button class="pin-key" data-key="clear">C</button>
                    <button class="pin-key" data-key="enter">✓</button>
                </div>
                <div class="pin-error">Invalid PIN. Please try again.</div>
            </div>
        `;
        
        document.body.appendChild(pinEntry);
        this.setupPinKeyboard();
    }

    setupPinKeyboard() {
        const pinInput = document.querySelector('.pin-input');
        const pinKeys = document.querySelectorAll('.pin-key');
        const pinError = document.querySelector('.pin-error');
        
        pinKeys.forEach(key => {
            key.addEventListener('click', () => {
                const keyValue = key.getAttribute('data-key');
                
                switch (keyValue) {
                    case 'clear':
                        pinInput.value = '';
                        break;
                    case 'enter':
                        this.verifyPin(pinInput.value);
                        break;
                    default:
                        if (pinInput.value.length < 4) {
                            pinInput.value += keyValue;
                        }
                        break;
                }
            });
        });
    }

    verifyPin(pin) {
        // Replace with your actual PIN verification logic
        const correctPin = '1234'; // Example PIN
        
        if (pin === correctPin) {
            document.querySelector('.pin-entry').style.display = 'none';
            this.startLoading();
        } else {
            document.querySelector('.pin-error').style.display = 'block';
            document.querySelector('.pin-input').value = '';
        }
    }
}

// Initialize preloader when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    new PortfolioPreloader();
});