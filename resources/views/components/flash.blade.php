@if (session()->has('success'))
    <div x-data="{show: true}" 
         x-init="setTimeout(() => show = false,3000)" 
         x-show="show" id="toast-success" class="absolute left-1/2 top-4 -translate-x-1/2 flex items-center max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg border-b-2 border-b-[#4ABF4E] shadow" role="alert">
        <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-[#4ABF4E] bg-[#4ABF4E]/10 rounded-lg">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
            </svg>
        </div>
        <p class="ms-3 text-sm font-normal pl-6">{{session('success')}}</p>
        
    </div>

@elseif(session()->has('deleted'))
    <div id="toast-danger" class="absolute left-1/2 top-4 -translate-x-1/2 flex items-center  max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow border-b border-b-main-red" role="alert">
        <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-main-red bg-main-red/10 rounded-lg">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z"/>
            </svg>
        </div>
        <p class="ms-3 text-sm font-normal pl-6">{{session('deleted')}}</p>
    </div>

@elseif(session()->has("error"))
<div id="toast-warning" class="absolute left-1/2 top-4 -translate-x-1/2 flex items-center w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow border-b-2 border-b-orange-500" role="alert">
    <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-orange-500 bg-orange-100 rounded-lg">
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z"/>
        </svg>
    </div>
    <p class="ms-3 text-sm font-normal">{{session('error')}}</p>
</div>
@endif