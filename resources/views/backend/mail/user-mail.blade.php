<p>Hi <b>{{ $u_name }}</b>, Your @if ($u_role == 1) Admin @elseif ($u_role == 2) Staff @elseif ($u_role == 3) Customer @endif account has been created successfully. Now are a Honourable @if ($u_role == 1) Admin @elseif ($u_role == 2) Staff @elseif ($u_role == 3) Customer @endif in <a style="text-decoration: none;" href="#">Restaurent Company</a>. Your email address is - <b>{{ $u_email }}</b> and your auto-generated password is - <b>{{ $u_pass }}</b>. Thank you for being with us.</p>

