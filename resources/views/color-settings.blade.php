@extends('layouts.app')

@section('content')
<div class="container">
    <h2>カラー設定</h2>
    <form action="{{ route('color-settings.save') }}" method="POST">
        @csrf
        <div class="row">
            <!-- Light Mode Settings -->
            <div class="col-md-6">
                <h3>ライトモード</h3>
                <div class="mb-3">
                    <label for="light-body-bg" class="form-label">Body Background</label>
                    <input type="color" class="form-control form-control-color" id="light-body-bg" name="light_body_bg" value="{{ $colors['light']['body_bg'] ?? '' }}">
                </div>
                <div class="mb-3">
                    <label for="light-body-color" class="form-label">Body Color</label>
                    <input type="color" class="form-control form-control-color" id="light-body-color" name="light_body_color" value="{{ $colors['light']['body_color'] ?? '' }}">
                </div>
                <div class="mb-3">
                    <label for="light-primary" class="form-label">Primary Color</label>
                    <input type="color" class="form-control form-control-color" id="light-primary" name="light_primary" value="{{ $colors['light']['primary'] ?? '' }}">
                </div>
                <div class="mb-3">
                    <label for="light-secondary" class="form-label">Secondary Color</label>
                    <input type="color" class="form-control form-control-color" id="light-secondary" name="light_secondary" value="{{ $colors['light']['secondary'] ?? '' }}">
                </div>
                <div class="mb-3">
                    <label for="light-success" class="form-label">Success Color</label>
                    <input type="color" class="form-control form-control-color" id="light-success" name="light_success" value="{{ $colors['light']['success'] ?? '' }}">
                </div>
                <div class="mb-3">
                    <label for="light-info" class="form-label">Info Color</label>
                    <input type="color" class="form-control form-control-color" id="light-info" name="light_info" value="{{ $colors['light']['info'] ?? '' }}">
                </div>
                <div class="mb-3">
                    <label for="light-warning" class="form-label">Warning Color</label>
                    <input type="color" class="form-control form-control-color" id="light-warning" name="light_warning" value="{{ $colors['light']['warning'] ?? '' }}">
                </div>
                <div class="mb-3">
                    <label for="light-danger" class="form-label">Danger Color</label>
                    <input type="color" class="form-control form-control-color" id="light-danger" name="light_danger" value="{{ $colors['light']['danger'] ?? '' }}">
                </div>
                <div class="mb-3">
                    <label for="light-light" class="form-label">Light Color</label>
                    <input type="color" class="form-control form-control-color" id="light-light" name="light_light" value="{{ $colors['light']['light'] ?? '' }}">
                </div>
                <div class="mb-3">
                    <label for="light-dark" class="form-label">Dark Color</label>
                    <input type="color" class="form-control form-control-color" id="light-dark" name="light_dark" value="{{ $colors['light']['dark'] ?? '' }}">
                </div>
            </div>

            <!-- Dark Mode Settings -->
            <div class="col-md-6">
                <h3>ダークモード</h3>
                <div class="mb-3">
                    <label for="dark-body-bg" class="form-label">Body Background</label>
                    <input type="color" class="form-control form-control-color" id="dark-body-bg" name="dark_body_bg" value="{{ $colors['dark']['body_bg'] ?? '' }}">
                </div>
                <div class="mb-3">
                    <label for="dark-body-color" class="form-label">Body Color</label>
                    <input type="color" class="form-control form-control-color" id="dark-body-color" name="dark_body_color" value="{{ $colors['dark']['body_color'] ?? '' }}">
                </div>
                <div class="mb-3">
                    <label for="dark-primary" class="form-label">Primary Color</label>
                    <input type="color" class="form-control form-control-color" id="dark-primary" name="dark_primary" value="{{ $colors['dark']['primary'] ?? '' }}">
                </div>
                <div class="mb-3">
                    <label for="dark-secondary" class="form-label">Secondary Color</label>
                    <input type="color" class="form-control form-control-color" id="dark-secondary" name="dark_secondary" value="{{ $colors['dark']['secondary'] ?? '' }}">
                </div>
                <div class="mb-3">
                    <label for="dark-success" class="form-label">Success Color</label>
                    <input type="color" class="form-control form-control-color" id="dark-success" name="dark_success" value="{{ $colors['dark']['success'] ?? '' }}">
                </div>
                <div class="mb-3">
                    <label for="dark-info" class="form-label">Info Color</label>
                    <input type="color" class="form-control form-control-color" id="dark-info" name="dark_info" value="{{ $colors['dark']['info'] ?? '' }}">
                </div>
                <div class="mb-3">
                    <label for="dark-warning" class="form-label">Warning Color</label>
                    <input type="color" class="form-control form-control-color" id="dark-warning" name="dark_warning" value="{{ $colors['dark']['warning'] ?? '' }}">
                </div>
                <div class="mb-3">
                    <label for="dark-danger" class="form-label">Danger Color</label>
                    <input type="color" class="form-control form-control-color" id="dark-danger" name="dark_danger" value="{{ $colors['dark']['danger'] ?? '' }}">
                </div>
                <div class="mb-3">
                    <label for="dark-light" class="form-label">Light Color</label>
                    <input type="color" class="form-control form-control-color" id="dark-light" name="dark_light" value="{{ $colors['dark']['light'] ?? '' }}">
                </div>
                <div class="mb-3">
                    <label for="dark-dark" class="form-label">Dark Color</label>
                    <input type="color" class="form-control form-control-color" id="dark-dark" name="dark_dark" value="{{ $colors['dark']['dark'] ?? '' }}">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">保存</button>
        <button type="button" class="btn btn-secondary" id="resetBtn">リセット</button>
        <button type="button" class="btn btn-info" id="testBtn">テスト</button>

    </form>
</div>
@endsection
@push('scripts')
<script>
    window.resetUrl = "{{ route('color-settings.reset') }}";
</script>
@vite('resources/js/reset-button.js')@endpush
