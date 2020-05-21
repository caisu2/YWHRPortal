@extends('layouts.app')

@section('content')
    @include('sweetalert::alert')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-12 col-lg-12 col-sm-12">
                                    <h3 class="text-md-center text-primary">Register</h3>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="email"
                                           class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="username"
                                           class="col-form-label text-md-right">{{ __('Username') }}</label>
                                    <input id="username" type="text"
                                           class="form-control @error('username') is-invalid @enderror" name="username"
                                           value="{{ old('username') }}" required autocomplete="username">

                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-md-6">
                                    <label for="password"
                                           class="col-form-label text-md-right">{{ __('Password') }}</label>
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="password-confirm"
                                           class="col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12 col-lg-12 col-sm-12">
                                    <h3 class="text-md-center text-primary">Personal Information</h3>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="name" class="col-form-label text-md-right">{{ __('Full Name') }}</label>
                                    <input id="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror" name="name"
                                           value="{{ old('name') }}" required autocomplete="name">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="status"
                                           class="col-form-label text-md-right">{{ __('Marital Status') }}</label>
                                    <select name="status" id="status"
                                            class="form-control @error('status') is-invalid @enderror"
                                            value="{{ old('status') }}" required autocomplete="status">
                                        <option value="">Select Status</option>
                                        @foreach($status as $status)
                                            <option value="{{ $status->id  }}"> {{ $status->status_desc }} </option>
                                        @endforeach
                                    </select>

                                    @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="age" class="col-form-label text-md-right">{{ __('Age') }}</label>
                                    <input id="age" type="number"
                                           class="form-control @error('age') is-invalid @enderror" name="age"
                                           value="{{ old('age') }}" required autocomplete="age">

                                    @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="address"
                                           class="col-form-label text-md-right">{{ __('Address') }}</label>
                                    <textarea name="address" id="address"
                                              class="form-control @error('name') is-invalid @enderror" name="name"
                                              value="{{ old('name') }}" required autocomplete="name"></textarea>
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="cellphone_no"
                                           class="col-form-label text-md-right">{{ __('Cellphone Number') }}</label>
                                    <input id="cellphone_no" type="tel" maxlength="11"
                                           class="form-control @error('age') is-invalid @enderror" name="cellphone_no"
                                           value="{{ old('age') }}" required autocomplete="cellphone_no">

                                    @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="salary"
                                           class="col-form-label text-md-right">{{ __('Expected Salary') }}</label>
                                    <input id="salary" type="number"
                                           class="form-control @error('age') is-invalid @enderror" name="salary"
                                           value="{{ old('salary') }}" required autocomplete="salary">

                                    @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="objectives"
                                           class="col-form-label text-md-right">{{ __('Long term objectives') }}</label>
                                    <textarea name="objectives" id="objectives"
                                              class="form-control @error('objectives') is-invalid @enderror"
                                              value="{{ old('objectives') }}" required
                                              autocomplete="objectives"></textarea>
                                    @error('objectives')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="background"
                                           class="col-form-label text-md-right">{{ __('Acceptance of Request to do full background check') }}</label>
                                    <textarea name="background" id="background"
                                              class="form-control @error('background') is-invalid @enderror"
                                              value="{{ old('background') }}" required
                                              autocomplete="background"></textarea>
                                    @error('background')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12 col-lg-12 col-sm-12">
                                    <h3 class="text-md-center text-primary">Files needed to be Attached</h3>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="recent"
                                           class="col-form-label text-md-right">{{ __('Recent Photo Taken') }}</label>
                                    <input id="recent" type="file"
                                           class="form-control @error('recent') is-invalid @enderror" name="recent"
                                           value="{{ old('recent') }}" required autocomplete="rencent" accept="image/*">

                                    @error('recent')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="cv" class="col-form-label text-md-right">{{ __('Resume/CV') }}</label>
                                    <input id="cv" type="file" class="form-control @error('cv') is-invalid @enderror"
                                           name="cv" value="{{ old('cv') }}" required autocomplete="cv"
                                           accept="application/pdf">

                                    @error('cv')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="audio"
                                           class="col-form-label text-md-right">{{ __('Introduce Yourself') }} </label>
                                    <small class="text-muted text-primary">(attach short recording about
                                        yourself)</small>
                                    <input id="audio" type="file"
                                           class="form-control @error('audio') is-invalid @enderror" name="audio"
                                           value="{{ old('audio') }}" required autocomplete="audio" accept="audio/*">

                                    @error('rencent')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12 col-lg-12 col-sm-12">
                                    <h5 class="text-md-left text-primary">What is your office setup like?</h5>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="office_desc"
                                           class="col-form-label text-md-right">{{ __('Describe what your office like') }}</label>
                                    <textarea name="office_desc" id="office_desc"
                                              class="form-control @error('office_desc') is-invalid @enderror"
                                              value="{{ old('office_desc') }}" required
                                              autocomplete="office_desc"></textarea>
                                    @error('objectives')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="office"
                                           class="col-form-label text-md-right">{{ __('Photo of your office') }}</label>
                                    <input id="office" type="file"
                                           class="form-control @error('office') is-invalid @enderror" name="office"
                                           value="{{ old('office') }}" required autocomplete="office" accept="image/*">

                                    @error('office')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="internet"
                                           class="col-form-label text-md-right">{{ __('Internet Connection') }}</label>
                                    <small class="text-muted text-primary">(attach screen shot of speed test)</small>
                                    <input id="internet" type="file"
                                           class="form-control @error('internet') is-invalid @enderror" name="internet"
                                           value="{{ old('internet') }}" required autocomplete="internet"
                                           accept="image/*">

                                    @error('internet')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12 col-lg-12 col-sm-12">
                                    <h3 class="text-md-center text-primary">Position and salary of your past jobs</h3>
                                    <center><small class="text-muted">(Give at least 5)</small></center>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="position"
                                           class="col-form-label text-md-right">{{ __('Position') }}</label>
                                    <input id="position" type="text"
                                           class="form-control @error('position') is-invalid @enderror"
                                           name="position[]" value="{{ old('position') }}" required
                                           autocomplete="position">

                                    @error('position')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-2">
                                    <label for="starting" class="col-form-label text-md-right">{{ __('Start') }}</label>
                                    <small class="text-muted">(salary)</small>
                                    <input id="starting" type="number"
                                           class="form-control @error('starting') is-invalid @enderror"
                                           name="starting[]" value="{{ old('starting') }}" required
                                           autocomplete="starting">

                                    @error('starting')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-2">
                                    <label for="ending" class="col-form-label text-md-right">{{ __('End') }}</label>
                                    <small class="text-muted">(salary)</small>
                                    <input id="ending" type="number"
                                           class="form-control @error('ending') is-invalid @enderror" name="ending[]"
                                           value="{{ old('ending') }}" required autocomplete="end">

                                    @error('Ending')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="note" class="col-form-label text-md-right">{{ __('Note') }}</label>
                                    <textarea name="note[]" id="note"
                                              class="form-control @error('note') is-invalid @enderror"
                                              value="{{ old('note') }}" required autocomplete="note"></textarea>

                                    @error('note')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <input id="position" type="text"
                                           class="form-control @error('position') is-invalid @enderror"
                                           name="position[]" value="{{ old('position') }}"
                                           autocomplete="position">

                                    @error('position')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-2">
                                    <input id="starting" type="number"
                                           class="form-control @error('starting') is-invalid @enderror"
                                           name="starting[]" value="{{ old('starting') }}"
                                           autocomplete="starting">

                                    @error('starting')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-2">
                                    <input id="ending" type="number"
                                           class="form-control @error('ending') is-invalid @enderror" name="ending[]"
                                           value="{{ old('ending') }}" autocomplete="ending">

                                    @error('Ending')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <textarea name="note[]" id="note"
                                              class="form-control @error('note') is-invalid @enderror"
                                              value="{{ old('note') }}" autocomplete="note"></textarea>

                                    @error('note')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <input id="position" type="text"
                                           class="form-control @error('position') is-invalid @enderror"
                                           name="position[]" value="{{ old('position') }}"
                                           autocomplete="position">

                                    @error('position')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-2">
                                    <input id="starting" type="number"
                                           class="form-control @error('starting') is-invalid @enderror"
                                           name="starting[]" value="{{ old('starting') }}"
                                           autocomplete="starting">

                                    @error('starting')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-2">
                                    <input id="ending" type="number"
                                           class="form-control @error('ending') is-invalid @enderror" name="ending[]"
                                           value="{{ old('ending') }}" autocomplete="ending">

                                    @error('Ending')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <textarea name="note[]" id="note"
                                              class="form-control @error('note') is-invalid @enderror"
                                              value="{{ old('note') }}" autocomplete="note"></textarea>

                                    @error('note')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <input id="position" type="text"
                                           class="form-control @error('position') is-invalid @enderror"
                                           name="position[]" value="{{ old('position') }}"
                                           autocomplete="position">

                                    @error('position')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-2">
                                    <input id="starting" type="number"
                                           class="form-control @error('starting') is-invalid @enderror"
                                           name="starting[]" value="{{ old('starting') }}"
                                           autocomplete="starting">

                                    @error('starting')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-2">
                                    <input id="ending" type="number"
                                           class="form-control @error('ending') is-invalid @enderror" name="ending[]"
                                           value="{{ old('ending') }}" autocomplete="end">

                                    @error('Ending')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <textarea name="note[]" id="note"
                                              class="form-control @error('note') is-invalid @enderror"
                                              value="{{ old('note') }}" autocomplete="note"></textarea>

                                    @error('note')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <input id="position" type="text"
                                           class="form-control @error('position') is-invalid @enderror"
                                           name="position[]" value="{{ old('position') }}"
                                           autocomplete="position">

                                    @error('position')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-2">
                                    <input id="starting" type="number"
                                           class="form-control @error('starting') is-invalid @enderror"
                                           name="starting[]" value="{{ old('starting') }}"
                                           autocomplete="starting">

                                    @error('starting')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-2">
                                    <input id="ending" type="number"
                                           class="form-control @error('ending') is-invalid @enderror" name="ending[]"
                                           value="{{ old('ending') }}" autocomplete="end">

                                    @error('Ending')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <textarea name="note[]" id="note"
                                              class="form-control @error('note') is-invalid @enderror"
                                              value="{{ old('note') }}" autocomplete="note"></textarea>

                                    @error('note')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                                <div class="col-md-8">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                    <a class="btn btn-link" href="{{ route('login') }}">
                                        {{ __('Already have account?') }}
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
