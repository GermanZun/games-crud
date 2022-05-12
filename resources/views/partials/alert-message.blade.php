@if(session()->has('message'))
    <div class="bg-indigo-100 rounded-lg py-5 px-6 mb-4 text-base text-indigo-700 mb-3" role="alert">
        {!! session()->get('message') !!}
        <button type="button"
                class="btn-close box-content w-4 h-4 p-1 ml-auto text-yellow-900 border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-yellow-900 hover:opacity-75 hover:no-underline"
                data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
