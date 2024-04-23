
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact Management System </title>
        <link rel="stylesheet" href="{{ asset('css/header.css') }}">
        <link rel="stylesheet" href="{{ asset('css/update.css') }}">

    </head>
    <body>
    @include('parts.header')
<div class="formbold-main-wrapper">
  <div class="formbold-form-wrapper">
    <form  action="{{route('contacts.update',$contact)}}" method="POST"  >
        @csrf
        @method('PUT')
      <div class="formbold-mb-5">
        <label for="name" class="formbold-form-label"> Full Name </label>
        <input type="text" name="name" id="name" placeholder="Full Name" value="{{$contact->name}}" class="formbold-form-input" />
      </div>

      <div class="formbold-mb-5">
        <label for="email" class="formbold-form-label"> Email Address </label>
        <input type="email" name="email" id="email" placeholder="Enter your email" value="{{$contact->email}}" class="formbold-form-input" />
      </div>

      <div class="formbold-mb-5"> <label for="phone" class="formbold-form-label"> Phone </label> 
      <input type="text" name="phone" id="phone" placeholder="(319) 555-0115" value="{{$contact->phone}}" class="formbold-form-input" />
      </div>
      <div class="formbold-mb-5">
        <label for="subject" class="formbold-form-label"> Address </label>
        <input type="text" name="address" id="address" placeholder="Address" value="{{$contact->address}}" class="formbold-form-input" />
      </div>
      <div class="btnDiv ">
        <button type="reset" class="formbold-btn">reset</button>
        <button type="submit" class="formbold-btn">Submit</button>
      </div>
    </form>
  </div>
</div>