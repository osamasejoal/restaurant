@extends('backend.layouts.master')

@section('main-content')
    <div class="content-body">
        <div class="container-fluid">

            {{-- BreadCrumb --}}
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="{{ route('companySocial.index') }}">Social</a></li>
                    <li class="breadcrumb-item"><a href="#">Add Company Social</a></li>
                </ol>
            </div>

            <div class="row">
                <div class="col-xl-12 col-lg-12 m-auto">
                    <div class="card">
                        <div class="card-header">
                            <p class="m-auto text-primary h2">Add Social Media</p>
                        </div>
                        <div class="card-body">

                            {{-- Success alert --}}
                            @if (session('success'))
                                <div class="alert alert-success text-center col-10 m-auto mb-5">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <div class="basic-form">

                                {{-- Form --}}
                                <form action="{{ route('companySocial.store') }}" method="post" class="row">
                                    @csrf

                                    {{-- Social Media Logo --}}
                                    <div class="mb-5 row col-10 m-auto">

                                        <label for="nameicon" class="col-sm-3 col-md-4 col-lg-4 col-form-label">
                                            Social Media Name<span class="text-danger" style="font-size:20px">*</span>
                                        </label>

                                        <div class="col-sm-9 col-md-8 col-lg-8">
                                            <select name="nameicon" id="nameicon" class="form-control" style="font-size:18px">
                                                <option value="" class="text-center">-- select media icon --</option>
                                                <option value="facebook|||fab fa-facebook-square" {{ old('nameicon') == "facebook|||fab fa-facebook-square" ? 'selected' : '' }}>Facebook</option>

                                                <option value="Instagram|||fab fa-instagram" {{ old('nameicon') == "Instagram|||fab fa-instagram" ? 'selected' : '' }}>Instagram</option>

                                                <option value="YouTube|||fab fa-youtube" {{ old('nameicon') == "YouTube|||fab fa-youtube" ? 'selected' : '' }}>YouTube</option>

                                                <option value="Twitter|||fab fa-twitter" {{ old('nameicon') == "Twitter|||fab fa-twitter" ? 'selected' : '' }}>Twitter</option>

                                                <option value="TikTok|||fab fa-tiktok" {{ old('nameicon') == "TikTok|||fab fa-tiktok" ? 'selected' : '' }}>TikTok</option>

                                                <option value="Pinterest|||fab fa-pinterest" {{ old('nameicon') == "Pinterest|||fab fa-pinterest" ? 'selected' : '' }}>Pinterest</option>

                                                <option value="Snapchat|||fab fa-snapchat" {{ old('nameicon') == "Snapchat|||fab fa-snapchat" ? 'selected' : '' }}>Snapchat</option>

                                                <option value="LinkedIn|||fab fa-linkedin-in" {{ old('nameicon') == "LinkedIn|||fab fa-linkedin-in" ? 'selected' : '' }}>LinkedIn</option>

                                                <option value="WhatsApp|||fab fa-whatsapp" {{ old('nameicon') == "WhatsApp|||fab fa-whatsapp" ? 'selected' : '' }}>WhatsApp</option>

                                                <option value="WeChat|||fab fa-weixin" {{ old('nameicon') == "WeChat|||fab fa-weixin" ? 'selected' : '' }}>WeChat</option>

                                                <option value="Telegram|||fab fa-telegram-plane" {{ old('nameicon') == "Telegram|||fab fa-telegram-plane" ? 'selected' : '' }}>Telegram</option>

                                                <option value="Reddit|||fab fa-reddit-alien" {{ old('nameicon') == "Reddit|||fab fa-reddit-alien" ? 'selected' : '' }}>Reddit</option>

                                                <option value="Quora|||fab fa-quora" {{ old('nameicon') == "Quora|||fab fa-quora" ? 'selected' : '' }}>Quora</option>

                                                <option value="Skype|||fab fa-skype" {{ old('nameicon') == "Skype|||fab fa-skype" ? 'selected' : '' }}>Skype</option>

                                                <option value="Behance|||fab fa-behance" {{ old('nameicon') == "Behance|||fab fa-behance" ? 'selected' : '' }}>Behance</option>

                                                <option value="Dribbble|||fab fa-dribbble" {{ old('nameicon') == "Dribbble|||fab fa-dribbble" ? 'selected' : '' }}>Dribbble</option>

                                                <option value="Github|||fab fa-github" {{ old('nameicon') == "Github|||fab fa-github" ? 'selected' : '' }}>Github</option>

                                                <option value="Medium|||fab fa-medium-m" {{ old('nameicon') == "Medium|||fab fa-medium-m" ? 'selected' : '' }}>Medium</option>

                                            </select>

                                            @error('nameicon')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>

                                    {{-- Social Media Link --}}
                                    <div class="mb-5 row col-10 m-auto">

                                        <label for="socialLink" class="col-sm-3 col-md-4 col-lg-4 col-form-label">
                                            Social Media Link<span class="text-danger" style="font-size:20px">*</span>
                                        </label>

                                        <div class="col-sm-9 col-md-8 col-lg-8">
                                            <input type="url" name="link" id="socialLink" class="form-control" style="font-size:18px" value="{{ old('link') }}" placeholder="E.g.: https://www.facebook.com/sdhgdrt">
                                            
                                            @error('link')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>

                                    {{-- Submit Button --}}
                                    <div class="mb-3 row col-12">
                                        <div class="col-sm-12 text-center">
                                            <button type="submit" class="btn btn-primary">Add Social Media</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
