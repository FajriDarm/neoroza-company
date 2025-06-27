Nama: {{ $contact['name'] }}
Email: {{ $contact['email'] }}
Telepon: {{ $contact['phone'] ?? 'Tidak diisi' }}
Subjek: {{ $contact['subject'] }}

Pesan:
{{ $contact['message'] }}