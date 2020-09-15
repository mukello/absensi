@extends('base.main')
@section('title_page') Settings @endsection
@section('content')
        <div class="card card-style">
            <div class="content mt-0 mb-2">
                <div class="list-group list-custom-large mb-4">
                    
                    <a href="{{ route('profile.changePassword') }}#pageChangePassword">
                        <i class="fa font-14 fa-key bg-red2-dark rounded-sm"></i>
                        <span>Changes Password</span>
                        <strong>Manage your password</strong>
                        <i class="fa fa-angle-right mr-2"></i>
                    </a>

                    <a href="#" data-toggle-theme class="show-on-theme-light">
                        <i class="fa font-14 fa-moon bg-brown1-dark rounded-sm"></i>
                        <span>Dark Mode</span>
                        <strong>Auto Dark Mode Available Too</strong>
                        <i class="fa fa-angle-right mr-2"></i>
                    </a>

                    <a href="#" data-toggle-theme class="show-on-theme-dark">
                        <i class="fa font-14 fa-lightbulb bg-yellow1-dark rounded-sm"></i>
                        <span>Light Mode</span>
                        <strong>Auto Dark Mode Available Too</strong>
                        <i class="fa fa-angle-right mr-2"></i>
                    </a>
                    
                    <a href="#" data-menu="menu-highlights">
                        <i class="fa font-14 fa-brush bg-highlight color-white rounded-sm"></i>
                        <span>Color Scheme</span>
                        <strong>A tone of Colors, Just for You</strong>
                        <i class="fa fa-angle-right mr-2"></i>
                    </a>
                    
                    <a href="#" data-menu="menu-language">
                        <i class="fa font-14 fa-globe bg-green1-dark rounded-sm"></i>
                        <span>Language Picker</span>
                        <strong>A Sample for Demo Purposes</strong>
                        <i class="fa fa-angle-right mr-2"></i>
                    </a>
                </div>
            </div>
        </div>
@endsection
@push('scripts')
<script type="text/javascript">
    function fChangePassword() {
        window.location.href = "{{ route('profile.changePassword') }}";
    }
</script>
@endpush