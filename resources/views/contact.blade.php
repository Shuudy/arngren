@extends('layouts.app')

@section('body')
<x-navbar/>

<div class="contact">
    <div class="contact-maps">
        <div style="width: 100%"><iframe width="100%" height="150" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=57%20Rue%20Pierre%20Mauroy,%2059800%20Lille&amp;t=&amp;z=8&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps systems</a></iframe></div>
    </div>
    <div class="contact-content">
        <div class="contact-left">
            <div class="contact-title">
                <span class="contact-title-header">Contactez-nous</span>
                <span class="contact-title-subheader">Si vous avez la moindre questions n’hésitez pas.</span>
            </div>
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" name="name" id="name">
            </div>

            <div class="flex">
                <div class="form-group">
                    <label for="tel">Numéro de téléphone</label>
                    <input type="text" name="tel" id="tel">
                </div>
                <div class="form-group">
                    <label for="email">Adresse e-mail</label>
                    <input type="text" name="email" id="email">
                </div>
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message"></textarea>
            </div>

            <a href="" class="button">Soumettre</a>
        </div>

        <div class="contact-right">
            <div class="contact-right-title">
                Restons en contact
            </div>
            <div class="contact-right-subtitle">Nos informations de contact</div>
            <div class="contact-right-infos">
                <div class="contact-right-info">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"/>
                    </svg>
                    <span>03 66 06 06 96</span>
                </div>
                <div class="contact-right-info">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z"/>
                        <path d="M3 7l9 6l9 -6"/>
                    </svg>
                    <span>lille@mydigitalschool.com</span>
                </div>
                <div class="contact-right-info">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"/>
                        <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"/>
                    </svg>
                    <span>57 Rue Pierre Mauroy, 59800 Lille</span>
                </div>
            </div>            
        </div>
    </div>
</div>
<x-footer/>
@endsection