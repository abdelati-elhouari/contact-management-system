<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact Management System </title>
        <link rel="stylesheet" href="{{ asset('css/header.css') }}">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    </head>
    <body>
    @include('parts.header')
    @if(session('success'))
        <div class="alert success" id="alert">
                {{ session('success') }}
            </div>
            @endif
    @if(session('error'))
        <div class="alert error" id="alert">
                {{ session('error') }}
            </div>
    @endif
    <main class="table" id="customers_table">
        <section class="table__header">
            
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="images/search.png" alt="">
            </div>
            <div class="action_icon">
                <button onclick="chatboxToogleHandler()"  class="icon add_icon" ></button>
            </div>
            <div class="formbold-form-wrapper">
                <div class="formbold-form-header">
                  <h3>ADD CONTACT</h3>
                  <button onclick="chatboxToogleHandler()">
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="white">
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M0.474874 0.474874C1.10804 -0.158291 2.1346 -0.158291 2.76777 0.474874L16.5251 14.2322C17.1583 14.8654 17.1583 15.892 16.5251 16.5251C15.892 17.1583 14.8654 17.1583 14.2322 16.5251L0.474874 2.76777C-0.158291 2.1346 -0.158291 1.10804 0.474874 0.474874Z"
                      />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M0.474874 16.5251C-0.158291 15.892 -0.158291 14.8654 0.474874 14.2322L14.2322 0.474874C14.8654 -0.158292 15.892 -0.158291 16.5251 0.474874C17.1583 1.10804 17.1583 2.1346 16.5251 2.76777L2.76777 16.5251C2.1346 17.1583 1.10804 17.1583 0.474874 16.5251Z"
                      />
                    </svg>
                  </button>
                </div>
                <form  action="{{route('contacts.store')}}" method="POST" class="formbold-chatbox-form" >
                @csrf
                  <div class="formbold-mb-5">
                    <label for="name" class="formbold-form-label"> Your Name </label>
                    <input type="text" name="name" id="name" placeholder="Your Name" class="formbold-form-input" />
                  </div>
          
                  <div class="formbold-mb-5">
                    <label for="email" class="formbold-form-label"> Email Address </label>
                    <input type="email" name="email" id="email" placeholder="email" class="formbold-form-input" />
                  </div>
                  <div class="formbold-mb-5">
                    <label for="email" class="formbold-form-label"> Phone </label>
                    <input type="phone" name="phone" id="phone" placeholder="Phone" class="formbold-form-input" />
                  </div>
                  <div class="formbold-mb-5">
                    <label for="email" class="formbold-form-label"> Address </label>
                    <input type="text" name="address" id="address" placeholder="Address" class="formbold-form-input"/>
                  </div>

                  <div>
                    <button type="submit" class="formbold-btn w-full">Add Contact</button>
                  </div>
                </form>
              </div>
        </section>
        
       
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Id <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Full Name <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Email <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Phone <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Address <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Action </th>
                    </tr>
                </thead>
                <tbody>
                @foreach($contacts as $contact)
            <tr>
                <td> {{ $contact->id }} </td>
                <td> <img src="images/profile.png" alt="">{{ $contact->name }}</td>
                <td> {{ $contact->email }} </td>
                <td> {{ $contact->phone }} </td>
                <td> {{ $contact->address }} </td>
                <td> 
                    <div class="action_icon">
                        <a href="{{route('contacts.edit', $contact) }}" class="icon edit_icon"></a>
                        <form id="deleteForm"  action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;"  onsubmit="return showConfirmation()">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="icon delete_icon"></button> 
                        </form>
                    </div> 
                </td>
            </tr>
            @endforeach  
                </tbody>
            </table>
  
</div>

        </section>
    </main>
    <div id="confirmationModal" class="modal">
    <div class="modal-content">
        <p>Are you sure you want to delete this contact?</p>
        <div class="modal-buttons">
            <button id="confirmBtn">Yes</button>
            <button id="cancelBtn">Cancel</button>
        </div>
    </div>
    <!-- @include('parts.footer') -->
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/nav.js') }}"></script>

</body>
</html>
