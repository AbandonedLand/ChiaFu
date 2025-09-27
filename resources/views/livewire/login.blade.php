<div>
    <div class="row">
        <form wire:submit.prevent="login">
            <div class="col offset-l4 m12 l4 s12">
                @if(session()->has('error'))
                    <div class="tui-window red-168 full-width white-168-text">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="tui-window orange-168 full-width ">
                    <fieldset class="tui-fieldset">
                        <legend class="center">Login</legend>
                        <div class="row">
                            <div class="col s4 m4 l4">
                                Username:
                            </div>
                            <div class="col s8 m8 l8">
                                <input type="text" wire:model="username" class="tui-input full-width">
                                @error('username') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s4 m4 l4">
                                Password:
                            </div>
                            <div class="col s8 m8 l8">
                                <input type="password" wire:model="password" class="tui-input full-width">
                                @error('password')<span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <button class="tui-button right" wire:click="login">
                            Login
                        </button>


                    </fieldset>

                </div>
            </div>
        </form>
    </div>
</div>
