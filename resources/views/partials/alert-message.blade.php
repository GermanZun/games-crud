@if(session()->has('message'))

    <div class="flex justify-between text-indigo-700 shadow-inner rounded py-5 px-6 mb-4 bg-indigo-100">
        <p class="self-center">
            <strong>Guardado </strong> {!! session()->get('message') !!}
        </p>
        <strong class="text-xl align-center cursor-pointer alert-del">&times;</strong>
    </div>

    <script>
        const alert_del = document.querySelectorAll('.alert-del');
        alert_del.forEach((x) =>
            x.addEventListener('click', function () {
                x.parentElement.classList.add('hidden');
            })
        );
    </script>

@endif
