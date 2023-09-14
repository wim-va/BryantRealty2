Name Listing: {{ ucfirst($listing->name) }} <br>
Address: {{ $listing->address }},
{{ $listing->postcode }}
{{ $listing->city }}<br>
# beds: {{ $listing->beds }}<br>
# baths: {{ $listing->baths }}<br>
# rooms: {{ $listing->rooms }}<br>
Space: {{ $listing->space }}<br>
Price: {{ $listing->price }}<br>
Title: {{ $listing->headline }}<br>
description: {{ $listing->description }}<br>

Agent:
{{ $listing->firstName }}
{{ $listing->lastName }}<br>
Company: {{ $listing->company }}<br>
Location: {{ $listing->address }},
{{ $listing->postcode }}
{{ $listing->city }}<br>
Phone: {{ $listing->telephone }}<br>
Email: {{ $listing->email }}<br>
Site: {{ $listing->website }}<br>
VAT: {{ $listing->vat_number }}<br>
