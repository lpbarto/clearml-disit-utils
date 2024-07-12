<?php

namespace App\Filament\Auth;


use Filament\Forms\Components\Component;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Auth\EditProfile;

class CustomEditProfile extends EditProfile
{

    protected function getEmailFormComponent(): Component
    {
        return TextInput::make('email')
            ->label(__('filament-panels::pages/auth/edit-profile.form.email.label'))
            ->email()
            ->maxLength(255);
    }

    protected function getUsernameFormComponent(): Component
    {
        return TextInput::make('username')
            ->label(__('Username'))
            ->required()
            ->maxLength(255)
            ->unique(ignoreRecord: true);
    }

    protected function getForms(): array
    {
        return [
            'form' => $this->form(
                $this->makeForm()
                    ->schema([
                        $this->getNameFormComponent(),
                        $this->getUsernameFormComponent(),
                        $this->getEmailFormComponent(),
                        $this->getPasswordFormComponent(),
                        $this->getPasswordConfirmationFormComponent(),
                    ])
                    ->operation('edit')
                    ->model($this->getUser())
                    ->statePath('data')
                    ->inlineLabel(! static::isSimple()),
            ),
        ];
    }

}
