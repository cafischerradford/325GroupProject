<!DOCTYPE html>
<html lang="en">
<x-head title="Grocer | Signup"/>
<body>

    <nav class='flex justify-center container mx-auto py-3 font-quicksand items-center'>
        <a class="font-baskerville text-5xl" href="/">Grocer</a>
    </nav>
    <div class='h-[90vh] font-quicksand flex flex-col justify-center items-center'>
        <form class="w-1/3 basis-1/2 justify-between flex flex-col" action="/api/auth/signup" method="POST">
        <h1 class='font-baskerville text-4xl text-center'>Sign into your account</h1>
        <div class='flex flex-col'>
            <label>Email</label>
            <input class="rounded-sm h-8 border border-gray-200 indent-1" type="email" name="email" placeholder='johndoe@email.com'/>
        </div>

        <div class='flex flex-col'>
            <label>Password</label>
            <input class="rounded-sm h-8 border border-gray-200 indent-1" type="password" name="password" placeholder='Password'/>
        </div>

        <div class='flex flex-col'>
            <label>Confirm Password</label>
            <input class="rounded-sm h-8 border border-gray-200 indent-1" type="password" name="confirm_password" placeholder='Confirm Password'/>
        </div>

        <button class="bg-blue-500 h-10 rounded-md text-white text-quicksand" type="submit">Signup</button>
        <p class='text-center'>Already have an account? <a href="/login" class='text-blue-500'>Login</a></p>
        </form>
    </div>
</body>
</html>