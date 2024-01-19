<x-layout.admin title="Login Page">
    <div class="space-y-8 justify-center p-4">
        <div class="text-3xl">Login Form</div>
        <form action="{{route('login.form')}}" class="flex flex-col gap-4" method="post">
            @csrf
            <div class="flex flex-col gap-2">
                <label for="email" class="">Email</label>
                <input type="email" class="m-input" name="email" , id="email">
            </div>
            <div class="flex flex-col gap-2">
                <label for="password" class="">Password</label>
                <input type="password" class="m-input" name="password" id="password">
            </div>
            <button type="submit" class="bg-blue-800 p-2 rounded-md">Login</button>
        </form>
    </div>
</x-layout.admin>
