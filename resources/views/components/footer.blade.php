<div>
    <!-- Footer -->

    <footer class="footer-custom">
        <div class="container">
            <div class="row text-center text-md-start justify-content-between">
                <div class="col-md-3 mb-3">
                    <h3 class="footer-title">{{ config('app.name') }}</h3>
                    <p>{{ __('ui.yourPlatform') }}</p>
                </div>
                <div class="col-md-3 mb-3">
                    <h3 class="footer-title">{{ __('ui.fastLinks') }}</h3>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('chi-siamo') }}" class="footer-link">{{ __('ui.aboutUs') }}</a></li>
                        <li><a href="{{ route('contatti') }}" class="footer-link">{{ __('ui.contactUs') }}</a></li>
                        <li><a href="{{ route('termini') }}" class="footer-link">{{ __('ui.termsConditions') }}</a></li>
                    </ul>
                </div>
                @if (auth()->user() != null && !auth()->user()->is_revisor)
                    <div class="col-md-3 mb-3">
                        <h3 class="footer-title">{{ __('ui.wantBeRevisor') }}</h3>
                        <p>{{ __('ui.clickRevisor') }}</p>
                        <a href="{{ route('revisor.form') }}" class="btn btn-nav">{{ __('ui.requestRevisor') }}</a>
                    </div>
                @endif
                <div class="col-md-3 mb-3">
                    <h3 class="footer-title">{{ __('ui.followUs') }}</h3>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/?locale=it_IT" target="_blank"><i
                                class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com" target="_blank"><i class="bi bi-instagram"></i></a>
                        <a href="https://x.com" target="_blank"><i class="bi bi-twitter-x"></i></a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-2">
                <p>© {{ date('Y') }} {{ config('app.name') }} - {{ __('ui.rightsReserved') }}</p>
            </div>
        </div>
    </footer>
</div>
