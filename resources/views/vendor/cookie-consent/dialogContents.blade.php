<div class="cookie-consent">
    <div class="container">
        <div class="alert">
            <div class="message">
                This website uses cookies to ensure you get the best experience.
                <a href="/about">Learn more</a>
            </div>
            <button class="btn-agree">Agree</button>
        </div>
    </div>
</div>

<style>
/* Keyframe for fade-in animation */
@keyframes fade-in {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

/* Main consent container */
.cookie-consent {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    z-index: 1050;
    animation: fade-in 0.4s ease-out;
}

/* Inner alert box */
.cookie-consent .alert {
    background-color: #f8f9fa;
    border: 1px solid #dee2e6;
    box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,0.075);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    gap: 1rem;
    margin-bottom: 0;
    padding: 1rem 1.5rem;
    border-top-left-radius: 0.5rem;
    border-top-right-radius: 0.5rem;
}

@media (min-width: 768px) {
    .cookie-consent .alert {
        flex-direction: row;
    }
}

/* Text */
.cookie-consent .message {
    color: #6c757d;
    font-size: 1.5rem;
}

/* Link */
.cookie-consent .message a {
    margin-left: 0.25rem;
    text-decoration: underline;
    color: #2baa65;
}

/* Button */
.cookie-consent .btn-agree {
    background-color: #2baa65;
    color: white;
    border: none;
    padding: 0.375rem 0.75rem;
    font-size: 1.5rem;
    border-radius: 0.25rem;
    cursor: pointer;
    transition: background-color 0.2s;
}

.cookie-consent .btn-agree:hover {
    background-color: #0b5ed7;
}
</style>
