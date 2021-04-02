@extends ('products.layout')

    @section ('content')
        
        <form action="/products/store" method="post">
        @csrf
            <div>
                <label for="title">Title</label>
                <input type="text" id="title" name="title" value="{{ old('title') }}"/>
                @error('title')
                    <p class="valid_error">{{$errors->first('title')}}</p>
                @enderror
            </div>
            <div>
                <label for="description">description</label> <br />
                <textarea name="description" id="" cols="30" rows="10">{{ old('description') }}</textarea>
                @error('description')
                    <p class="valid_error">{{$errors->first('description')}}</p>
                @enderror
            </div>
            <!-- <label for="upload_img">upload image</label>
            <input type="upload" id="upload_img" name="upload_img" /> -->
            <input type="submit" value="Create">
        </form>

    @endsection
