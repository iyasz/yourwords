
<div class="dialog-wrapper z-30 fixed inset-0 flex items-center justify-center">
    <div class="dialog-backdrop fixed inset-0 bg-black bg-opacity-50"></div>
    <div class="content-dialog bg-zinc-900 md:p-8 p-5 rounded-lg shadow-lg relative w-[500px] mx-3">
        
        <form action="/{{ request()->path() }}" method="post">
            @csrf
            <div class="header text-center mb-7">
                <div class="flex justify-end">
                    <butoon x-on:click="openList = !openList" class="cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="white" width="24" height="24" viewBox="0 0 24 24"><path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"></path></svg>
                    </butoon>
                </div>
            </div>
            <div class="mb-5">
                <label for="text" class="text-slate-200 text-sm">Text </label>
                <input type="text" name="text" id="text" required maxlength="100" class="w-full p-3 mt-2 text-slate-200 rounded-md foucs:outline-none focus-visible:outline-none bg-zinc-800 border-[1px] border-zinc-600" placeholder="Example">
            </div>
            <div class="mb-5">
                <label for="answer_text" class="text-slate-200 text-sm">Text Answer</label>
                <input type="text" name="answer_text" id="answer_text" required maxlength="100" class="w-full p-3 mt-2 text-slate-200 rounded-md foucs:outline-none focus-visible:outline-none bg-zinc-800 border-[1px] border-zinc-600" placeholder="Example">
            </div>
            <button class="w-full text-white bg-zinc-700 rounded-md py-3 text-sm mt-8">Submit</button>
        </form>
    </div>
    
</div>
