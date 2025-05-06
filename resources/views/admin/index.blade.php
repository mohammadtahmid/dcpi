<h2>Admin page</h2>
<form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <input type="submit" value="Logout">
                </form>
