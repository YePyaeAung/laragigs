<x-layout>
    
    <main>
        <div class="mx-4">
            <x-card-wrapper class="p-10 max-w-lg mx-auto mt-24">
                <header class="text-center">
                    <h2 class="text-2xl font-bold uppercase mb-1">
                        Edit: {{$listing->title}}
                    </h2>
                    <p class="mb-4">Post a gig to find a developer</p>
                </header>
                
                <form action="/lists/{{$listing->id}}/update" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-6">
                        <label for="company" class="inline-block text-lg mb-2">Company Name</label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company" value="{{old('company', $listing->company)}}"/>
                        <x-error error="company"/>
                    </div>
                    
                    <div class="mb-6">
                        <label for="title" class="inline-block text-lg mb-2">Job Title</label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title" placeholder="Example: Senior Laravel Developer" value="{{old('title', $listing->title)}}"/>
                        <x-error error="title"/>
                    </div>
                    
                    <div class="mb-6">
                        <label for="location" class="inline-block text-lg mb-2">Job Location</label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location" placeholder="Example: Remote, Boston MA, etc" value="{{old('location', $listing->location)}}"/>
                        <x-error error="location"/>
                    </div>
                    
                    <div class="mb-6">
                        <label for="email" class="inline-block text-lg mb-2">Contact Email</label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email', $listing->email)}}"/>
                        <x-error error="email"/>
                    </div>
                    
                    <div class="mb-6">
                        <label for="website" class="inline-block text-lg mb-2">
                            Website/Application URL
                        </label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website" value="{{old('website', $listing->website)}}"/>
                        <x-error error="website"/>
                    </div>
                    
                    <div class="mb-6">
                        <label for="tags" class="inline-block text-lg mb-2">
                            Tags (Comma Separated)
                        </label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags" placeholder="Example: Laravel, Backend, Postgres, etc" value="{{old('tags', $listing->tags)}}"/>
                        <x-error error="tags"/>
                    </div>
                    
                    <div class="mb-6">
                        <label for="logo" class="inline-block text-lg mb-2">
                            Company Logo
                        </label>
                        <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo"/>
                        <img class="w-48 mr-6 my-6" src="{{$listing->logo ? asset('/storage/'.$listing->logo) : asset('/images/no-image.png')}}" alt=""/>
                        <x-error error="logo"/>
                    </div>
                    
                    <div class="mb-6">
                        <label for="description" class="inline-block text-lg mb-2">
                            Job Description
                        </label>
                        <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10" placeholder="Include tasks, requirements, salary, etc">{{old('description', $listing->description)}}</textarea>
                        <x-error error="description"/>
                    </div>
                    
                    <div class="mb-6">
                        <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                            Update Gig
                        </button>
                        
                        <a href="/" class="text-black ml-4"> Back </a>
                    </div>
                </form>
            </x-card-wrapper>
        </div>
    </main>
    
    <x-footer/>
    </x-layout>
    