document.addEventListener('DOMContentLoaded', function () {
    const resetBtn = document.getElementById('resetBtn');
    resetBtn.addEventListener('click', function () {
        if (confirm('初期値に戻しますか？')) {
            fetch(window.resetUrl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
            }).then(response => {
                if (response.ok) {
                    location.reload();
                } else {
                    alert('リセットに失敗しました。');
                }
            });
        }
    });
});
