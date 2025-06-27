<!DOCTYPE html>
<html>
<head>
    <title>Pesan Kontak Baru</title>
</head>
<body>
    <h2>Pesan Kontak Baru dari {{ $contact['name'] }}</h2>
    
    <p><strong>Email:</strong> {{ $contact['email'] }}</p>
    <p><strong>Telepon:</strong> {{ $contact['phone'] ?? 'Tidak diisi' }}</p>
    <p><strong>Subjek:</strong> {{ $contact['subject'] }}</p>
    
    <h3>Isi Pesan:</h3>
    <p>{{ $contact['message'] }}</p>
    
    <hr>
    <small>Email ini dikirim melalui formulir kontak website</small>
</body>
</html>