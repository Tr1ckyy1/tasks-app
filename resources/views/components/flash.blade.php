@if (session()->has('success'))
    <div x-data="{show: true}" 
         x-init="setTimeout(() => show = false,3000)" 
         x-show="show" id="toast-success" class="absolute left-1/2 top-4 -translate-x-1/2 flex items-center max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg border-b-2 border-b-[#4ABF4E] shadow" role="alert">
        <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-[#4ABF4E] bg-[#4ABF4E]/10 rounded-lg">
            <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.2285 0.760254C8.38871 0.760254 0.409668 8.7393 0.409668 18.5799C0.409668 28.422 8.38871 36.3987 18.2285 36.3987C28.069 36.3987 36.0481 28.422 36.0481 18.5799C36.0481 8.7393 28.069 0.760254 18.2285 0.760254ZM24.8065 9.64927C26.3711 9.64927 27.6394 10.9156 27.6394 12.4794C27.6394 14.0459 26.3711 15.3122 24.8065 15.3122C23.2428 15.3122 21.9765 14.0459 21.9765 12.4794C21.9765 10.9156 23.2428 9.64927 24.8065 9.64927ZM11.65 9.64927C13.2138 9.64927 14.4821 10.9156 14.4821 12.4794C14.4821 14.0459 13.2138 15.3122 11.65 15.3122C10.0863 15.3122 8.81796 14.0459 8.81796 12.4794C8.81796 10.9156 10.0867 9.64927 11.65 9.64927ZM18.2285 30.91C12.8027 30.91 8.33169 26.8401 7.68624 21.5874H28.7715C28.1261 26.8397 23.6562 30.91 18.2285 30.91Z" fill="#4ABF4E"/>
                </svg>
                
        </div>
        <p class="ms-3 text-sm font-normal ">{{session('success')}}</p>
        
    </div>

@elseif(session()->has("error"))
<div x-data="{show: true}"
     x-init="setTimeout(() => show = false,3000)"
     x-show="show"id="toast-warning" class="absolute left-1/2 top-4 -translate-x-1/2 flex items-center w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow border-b-2 border-b-orange-500" role="alert">
    <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-orange-500 bg-orange-100 rounded-lg">
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z"/>
        </svg>
    </div>
    <p class="ms-3 text-sm font-normal">{{session('error')}}</p>
</div>
@endif