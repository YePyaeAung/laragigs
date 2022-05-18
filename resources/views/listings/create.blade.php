<x-layout>
    
    <main>
        <div class="mx-4">
            <x-card-wrapper class="p-10 max-w-lg mx-auto mt-24">
                <header class="text-center">
                    <h2 class="text-2xl font-bold uppercase mb-1">
                        Create a Gig
                    </h2>
                    <p class="mb-4">Post a gig to find a developer</p>
                </header>
                
                <form action="/lists/store" method="POST">
                    @csrf
                    <div class="mb-6">
                        <label for="company" class="inline-block text-lg mb-2">Company Name</label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company"/>
                        <x-error error="company"/>
                    </div>
                    
                    <div class="mb-6">
                        <label for="title" class="inline-block text-lg mb-2">Job Title</label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title" placeholder="Example: Senior Laravel Developer"/>
                        <x-error error="title"/>
                    </div>
                    
                    <div class="mb-6">
                        <label for="location" class="inline-block text-lg mb-2">Job Location</label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location" placeholder="Example: Remote, Boston MA, etc"/>
                        <x-error error="location"/>
                    </div>
                    
                    <div class="mb-6">
                        <label for="email" class="inline-block text-lg mb-2">Contact Email</label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email"/>
                        <x-error error="email"/>
                    </div>
                    
                    <div class="mb-6">
                        <label for="website" class="inline-block text-lg mb-2">
                            Website/Application URL
                        </label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website"/>
                        <x-error error="website"/>
                    </div>
                    
                    <div class="mb-6">
                        <label for="tags" class="inline-block text-lg mb-2">
                            Tags (Comma Separated)
                        </label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags" placeholder="Example: Laravel, Backend, Postgres, etc"/>
                        <x-error error="tags"/>
                    </div>
                    
                    <div class="mb-6">
                        <label for="logo" class="inline-block text-lg mb-2">
                            Company Logo
                        </label>
                        <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo"/>
                        <x-error error="logo"/>
                    </div>
                    
                    <div class="mb-6">
                        <label for="description" class="inline-block text-lg mb-2">
                            Job Description
                        </label>
                        <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10" placeholder="Include tasks, requirements, salary, etc"></textarea>
                        <x-error error="description"/>
                    </div>
                    
                    <div class="mb-6">
                        <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                            Create Gig
                        </button>
                        
                        <a href="/" class="text-black ml-4"> Back </a>
                    </div>
                </form>
            </x-card-wrapper>
        </div>
    </main>
    
    <x-footer/>
    </x-layout>
    