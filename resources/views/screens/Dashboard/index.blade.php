<x-layouts.layout>
    <x-slot:title>Dashboard</x-slot:title>

    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Welcome to your Dashboard</h1>
        <p class="mb-4">This is a subheader</p>
    </div>
</x-layouts.layout>


<x-layouts.layout>
    <x-slot:title>Dashboard</x-slot:title>

    <div class="container mx-auto p-4 space-y-6">
        <h1 class="text-2xl font-bold">Welcome to Dashboard</h1>
        <p class="text-gray-600">Click a button to test SweetAlert2 features.</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <button id="basic" class="btn-blue">Basic</button>
            <button id="confirm" class="btn-red">Confirm</button>
            <button id="input" class="btn-green">Input</button>
            <button id="toast" class="btn-purple">Toast</button>
            <button id="timer" class="btn-yellow">Auto Close</button>
            <button id="loader" class="btn-indigo">Loader</button>
            <button id="html" class="btn-gray">Custom HTML</button>
            <button id="steps" class="btn-pink">Steps</button>

            <button id="image" class="btn-blue">Image</button>
            <button id="password" class="btn-red">Password</button>
            <button id="select" class="btn-green">Select</button>
            <button id="checkbox" class="btn-purple">Checkbox</button>
            <button id="force" class="btn-yellow">Force Action</button>
            <button id="retry" class="btn-indigo">Retry Error</button>
            <button id="emoji" class="btn-gray">Emoji</button>
            <button id="toastQueue" class="btn-pink">Toast Queue</button>
            <button id="asyncCheck" class="btn-blue">Async Check</button>
        </div>
    </div>

    <style>
        .btn-blue {
            @apply bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded;
        }

        .btn-red {
            @apply bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded;
        }

        .btn-green {
            @apply bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded;
        }

        .btn-purple {
            @apply bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded;
        }

        .btn-yellow {
            @apply bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-2 px-4 rounded;
        }

        .btn-indigo {
            @apply bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded;
        }

        .btn-gray {
            @apply bg-gray-700 hover:bg-gray-900 text-white font-bold py-2 px-4 rounded;
        }

        .btn-pink {
            @apply bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4 rounded;
        }
    </style>

    <script>
        const tailwindBtn = {
            confirmButton: 'bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded',
            cancelButton: 'bg-gray-300 hover:bg-gray-400 text-black px-4 py-2 rounded'
        };

        basic.onclick = () => Swal.fire({
            title: 'Hello!',
            icon: 'info',
            customClass: tailwindBtn,
            buttonsStyling: false
        });
        confirm.onclick = () => Swal.fire({
            title: 'Are you sure?',
            icon: 'warning',
            showCancelButton: true,
            customClass: tailwindBtn,
            buttonsStyling: false
        }).then(r => r.isConfirmed && Swal.fire('Deleted!', '', 'success'));

        input.onclick = () => Swal.fire({
            title: 'Your name',
            input: 'text',
            showCancelButton: true
        }).then(r => r.isConfirmed && Swal.fire(`Hello ${r.value}`));

        toast.onclick = () => Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'success',
            title: 'Saved',
            timer: 3000,
            showConfirmButton: false
        });

        timer.onclick = () => Swal.fire({
            title: 'Closing...',
            timer: 2000,
            timerProgressBar: true
        });
        loader.onclick = async () => {
            Swal.fire({
                title: 'Loading...',
                didOpen: () => Swal.showLoading(),
                allowOutsideClick: false
            });
            await new Promise(r => setTimeout(r, 2000));
            Swal.fire('Done!', '', 'success');
        };

        html.onclick = () => Swal.fire({
            title: 'User Info',
            html: `<p><strong>Name:</strong> John Doe<br><strong>Role:</strong> Admin</p>`
        });

        steps.onclick = async () => {
            for (let i = 1; i <= 3; i++) await Swal.fire({
                title: `Step ${i}`
            });
            Swal.fire('Finished 🎉');
        };

        image.onclick = () => Swal.fire({
            title: 'Image Preview',
            imageUrl: 'https://picsum.photos/400/200',
            imageAlt: 'Random Image'
        });

        password.onclick = () => Swal.fire({
            title: 'Confirm Password',
            input: 'password',
            showCancelButton: true,
            preConfirm: v => v.length < 6 && Swal.showValidationMessage('Too short')
        });

        select.onclick = () => Swal.fire({
            title: 'Select Role',
            input: 'select',
            inputOptions: {
                admin: 'Admin',
                user: 'User'
            },
            inputPlaceholder: 'Choose one',
            showCancelButton: true
        });

        checkbox.onclick = () => Swal.fire({
            title: 'Terms',
            input: 'checkbox',
            inputPlaceholder: 'I agree',
            confirmButtonText: 'Continue',
            inputValidator: r => !r && 'You must agree'
        });

        force.onclick = () => Swal.fire({
            title: 'Important',
            text: 'You must confirm',
            allowOutsideClick: false,
            allowEscapeKey: false,
            icon: 'warning'
        });

        retry.onclick = () => Swal.fire({
            title: 'Error',
            icon: 'error',
            showCancelButton: true,
            confirmButtonText: 'Retry'
        });

        emoji.onclick = () => Swal.fire({
            html: '<div class="text-5xl">🔥</div><p>Custom emoji</p>',
            showConfirmButton: false,
            timer: 2000
        });

        toastQueue.onclick = () => {
            const T = Swal.mixin({
                toast: true,
                position: 'bottom-end',
                timer: 2500,
                showConfirmButton: false
            });
            T.fire({
                icon: 'success',
                title: 'Saved'
            });
            T.fire({
                icon: 'info',
                title: 'Synced'
            });
            T.fire({
                icon: 'warning',
                title: 'Low storage'
            });
        };

        asyncCheck.onclick = () => Swal.fire({
            title: 'Username',
            input: 'text',
            showCancelButton: true,
            preConfirm: async (v) => {
                await new Promise(r => setTimeout(r, 1000));
                if (v === 'admin') throw new Error('Username taken');
                return v;
            }
        }).then(r => r.isConfirmed && Swal.fire(`Welcome ${r.value}`));
    </script>
</x-layouts.layout>
