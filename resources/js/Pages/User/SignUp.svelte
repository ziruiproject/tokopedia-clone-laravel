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
        <div class="flex flex-col items-center w-3/4 p-4 shadow-md">
            <h1 class="text-4xl font-bold">Daftar Sekarang</h1>
            <span class="pt-2 text-lg"
                >Sudah punya akun Tokopedia? <a
                    href="/login"
                    class=" font-medium text-green-500">Masuk</a
                ></span
            >
            <button class="flex">
                <svg
                    width="24px"
                    height="24px"
                    stroke-width="1.5"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    color="#000000"
                    ><path
                        d="M15.5475 8.30327C14.6407 7.49361 13.4329 7 12.1089 7C9.28696 7 7 9.23899 7 12C7 14.761 9.28696 17 12.1089 17C15.5781 17 16.86 14.4296 17 12.4167H12.841"
                        stroke="#000000"
                        stroke-width="1.5"
                    ></path><path
                        d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                        stroke="#000000"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    ></path></svg
                >
                <span class="">Google</span>
            </button>
            <form action="">
                <input type="text" />
                <input type="password" />
            </form>
        </div>
    </div>
    <div class="flex text-xl">
        <p>© 2009-2023, PT Tokopedia |</p>
        <a href="https://www.tokopedia.com/help"> Tokopedia Care</a>
    </div>
</main>
