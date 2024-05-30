@extends('layouts.app')

@section('content')
<div class="container">
    <h2>カラー設定</h2>
    <form action="{{ route('color-settings.save') }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <!-- Light Mode Settings -->
            <div class="col-md-6">
                <h3>ライトモード</h3>
                <div class="mb-3">
                    <label for="light-body-bg" class="form-label">Body Background</label>
                    <input type="color" class="form-control form-control-color" id="light-body-bg" name="light_body_bg" value="{{ $colors['light']['body_bg'] }}">
                </div>
                <div class="mb-3">
                    <label for="light-body-color" class="form-label">Body Color</label>
                    <input type="color" class="form-control form-control-color" id="light-body-color" name="light_body_color" value="{{ $colors['light']['body_color'] }}">
                </div>
                <div class="mb-3">
                    <label for="light-primary" class="form-label">Primary Color</label>
                    <input type="color" class="form-control form-control-color" id="light-primary" name="light_primary" value="{{ $colors['light']['primary'] }}">
                </div>
                <div class="mb-3">
                    <label for="light-secondary" class="form-label">Secondary Color</label>
                    <input type="color" class="form-control form-control-color" id="light-secondary" name="light_secondary" value="{{ $colors['light']['secondary'] }}">
                </div>
                <div class="mb-3">
                    <label for="light-success" class="form-label">Success Color</label>
                    <input type="color" class="form-control form-control-color" id="light-success" name="light_success" value="{{ $colors['light']['success'] }}">
                </div>
                <div class="mb-3">
                    <label for="light-info" class="form-label">Info Color</label>
                    <input type="color" class="form-control form-control-color" id="light-info" name="light_info" value="{{ $colors['light']['info'] }}">
                </div>
                <div class="mb-3">
                    <label for="light-warning" class="form-label">Warning Color</label>
                    <input type="color" class="form-control form-control-color" id="light-warning" name="light_warning" value="{{ $colors['light']['warning'] }}">
                </div>
                <div class="mb-3">
                    <label for="light-danger" class="form-label">Danger Color</label>
                    <input type="color" class="form-control form-control-color" id="light-danger" name="light_danger" value="{{ $colors['light']['danger'] }}">
                </div>
                <div class="mb-3">
                    <label for="light-light" class="form-label">Light Color</label>
                    <input type="color" class="form-control form-control-color" id="light-light" name="light_light" value="{{ $colors['light']['light'] }}">
                </div>
                <div class="mb-3">
                    <label for="light-dark" class="form-label">Dark Color</label>
                    <input type="color" class="form-control form-control-color" id="light-dark" name="light_dark" value="{{ $colors['light']['dark'] }}">
                </div>
                <div class="mb-3">
                    <label for="light-border-color" class="form-label">Border Color</label>
                    <input type="color" class="form-control form-control-color" id="light-border-color" name="light_border_color" value="{{ $colors['light']['border_color'] }}">
                </div>
                <div class="mb-3">
                    <label for="light-btn-bg" class="form-label">Button Background</label>
                    <input type="color" class="form-control form-control-color" id="light-btn-bg" name="light_btn_bg" value="{{ $colors['light']['btn_bg'] }}">
                </div>
                <div class="mb-3">
                    <label for="light-btn-border-color" class="form-label">Button Border Color</label>
                    <input type="color" class="form-control form-control-color" id="light-btn-border-color" name="light_btn_border_color" value="{{ $colors['light']['btn_border_color'] }}">
                </div>
                <div class="mb-3">
                    <label for="light-btn-hover-bg" class="form-label">Button Hover Background</label>
                    <input type="color" class="form-control form-control-color" id="light-btn-hover-bg" name="light_btn_hover_bg" value="{{ $colors['light']['btn_hover_bg'] }}">
                </div>
            </div>

            <!-- Dark Mode Settings -->
            <div class="col-md-6">
                <h3>ダークモード</h3>
                <div class="mb-3">
                    <label for="dark-body-bg" class="form-label">Body Background</label>
                    <input type="color" class="form-control form-control-color" id="dark-body-bg" name="dark_body_bg" value="{{ $colors['dark']['body_bg'] }}">
                </div>
                <div class="mb-3">
                    <label for="dark-body-color" class="form-label">Body Color</label>
                    <input type="color" class="form-control form-control-color" id="dark-body-color" name="dark_body_color" value="{{ $colors['dark']['body_color'] }}">
                </div>
                <div class="mb-3">
                    <label for="dark-primary" class="form-label">Primary Color</label>
                    <input type="color" class="form-control form-control-color" id="dark-primary" name="dark_primary" value="{{ $colors['dark']['primary'] }}">
                </div>
                <div class="mb-3">
                    <label for="dark-secondary" class="form-label">Secondary Color</label>
                    <input type="color" class="form-control form-control-color" id="dark-secondary" name="dark_secondary" value="{{ $colors['dark']['secondary'] }}">
                </div>
                <div class="mb-3">
                    <label for="dark-success" class="form-label">Success Color</label>
                    <input type="color" class="form-control form-control-color" id="dark-success" name="dark_success" value="{{ $colors['dark']['success'] }}">
                </div>
                <div class="mb-3">
                    <label for="dark-info" class="form-label">Info Color</label>
                    <input type="color" class="form-control form-control-color" id="dark-info" name="dark_info" value="{{ $colors['dark']['info'] }}">
                </div>
                <div class="mb-3">
                    <label for="dark-warning" class="form-label">Warning Color</label>
                    <input type="color" class="form-control form-control-color" id="dark-warning" name="dark_warning" value="{{ $colors['dark']['warning'] }}">
                </div>
                <div class="mb-3">
                    <label for="dark-danger" class="form-label">Danger Color</label>
                    <input type="color" class="form-control form-control-color" id="dark-danger" name="dark_danger" value="{{ $colors['dark']['danger'] }}">
                </div>
                <div class="mb-3">
                    <label for="dark-light" class="form-label">Light Color</label>
                    <input type="color" class="form-control form-control-color" id="dark-light" name="dark_light" value="{{ $colors['dark']['light'] }}">
                </div>
                <div class="mb-3">
                    <label for="dark-dark" class="form-label">Dark Color</label>
                    <input type="color" class="form-control form-control-color" id="dark-dark" name="dark_dark" value="{{ $colors['dark']['dark'] }}">
                </div>
                <div class="mb-3">
                    <label for="dark-border-color" class="form-label">Border Color</label>
                    <input type="color" class="form-control form-control-color" id="dark-border-color" name="dark_border_color" value="{{ $colors['dark']['border_color'] }}">
                </div>
                <div class="mb-3">
                    <label for="dark-btn-bg" class="form-label">Button Background</label>
                    <input type="color" class="form-control form-control-color" id="dark-btn-bg" name="dark_btn_bg" value="{{ $colors['dark']['btn_bg'] }}">
                </div>
                <div class="mb-3">
                    <label for="dark-btn-border-color" class="form-label">Button Border Color</label>
                    <input type="color" class="form-control form-control-color" id="dark-btn-border-color" name="dark_btn_border_color" value="{{ $colors['dark']['btn_border_color'] }}">
                </div>
                <div class="mb-3">
                    <label for="dark-btn-hover-bg" class="form-label">Button Hover Background</label>
                    <input type="color" class="form-control form-control-color" id="dark-btn-hover-bg" name="dark_btn_hover_bg" value="{{ $colors['dark']['btn_hover_bg'] }}">
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">保存</button>
        <button type="reset" class="btn btn-secondary">リセット</button>
    </form>
    <script>
document.addEventListener('DOMContentLoaded', function () {
    const resetBtn = document.getElementById('resetBtn');
    resetBtn.addEventListener('click', function () {
        const theme = document.documentElement.getAttribute('data-bs-theme');
        document.querySelectorAll(`[id^="${theme}-"]`).forEach(input => {
            const defaultValue = input.dataset.default;
            input.value = defaultValue;
            const varName = `--bs-${input.id.replace(`${theme}-`, '')}`;
            document.documentElement.style.setProperty(varName, defaultValue);
        });
    });
});
</script>
</div>
@endsection
