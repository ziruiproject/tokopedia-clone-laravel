<script>
    export let signUpImg, tokopediaLogo;
</script>

<svelte:head>
    <title>Sign Up</title>
</svelte:head>

<main
    class="flex flex-col items-center justify-between h-screen pt-8 pb-24 align-middle"
>
    <div>
        <img src={tokopediaLogo} alt="Tokopedia Logo" width="170" />
    </div>
    <div class="place-content-between grid w-3/4 grid-cols-2 gap-4">
        <div class="place-self-center grid gap-4 text-center">
            <img src={signUpImg} alt="Sign Up Images" width="375" />
            <h3 class="pt-4 text-3xl font-bold">
                Jual Beli Mudah Hanya di Tokopedia
            </h3>
            <p class="text-lg">
                Gabung dan rasakan kemudahan bertransaksi di Tokopedia
            </p>
        </div>
        <div class="new-shadow place-items-center grid w-3/4 gap-2 py-8 -my-8">
            <div class="grid gap-3 text-center">
                <h1 class="text-4xl font-bold text-gray-800">
                    Daftar Sekarang
                </h1>
                <span class="text-xl"
                    >Sudah punya akun Tokopedia? <a
                        href="/login"
                        class=" font-medium text-green-500">Masuk</a
                    ></span
                >
            </div>
            <div class="grid w-5/6 gap-5">
                <button class="rounded-xl flex justify-around py-3 border-2">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        height="20"
                        viewBox="0 0 24 24"
                        width="20"
                        ><path
                            d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"
                            fill="#4285F4"
                        /><path
                            d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"
                            fill="#34A853"
                        /><path
                            d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"
                            fill="#FBBC05"
                        /><path
                            d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"
                            fill="#EA4335"
                        /><path d="M1 1h22v22H1z" fill="none" /></svg
                    >
                    <span class="px-14 text-xl font-bold text-gray-500"
                        >Google</span
                    >
                    <span></span>
                </button>
                <span class="text-lg text-center text-gray-400">
                    atau daftar dengan
                </span>
                <form action="" class="grid gap-2">
                    <label class="text-lg text-gray-700" for=""
                        >Phone Number or Email
                    </label>
                    <input
                        type="text"
                        class="rounded-xl focus:border-green-400 w-full p-4 border outline-none"
                    />
                    <span class="text-lg text-gray-500"
                        >Example: email@tokopedia.com</span
                    >
                </form>
                <button
                    class="rounded-xl w-full p-5 text-2xl font-bold text-white bg-green-400"
                    type="submit">Daftar</button
                >
            </div>
        </div>
    </div>
    <div class="flex text-xl">
        <p>© 2009-2023, PT Tokopedia |</p>
        <a href="https://www.tokopedia.com/help"> Tokopedia Care</a>
    </div>
</main>
