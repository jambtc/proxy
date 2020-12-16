# proxy
Simple PHP proxy script to bypass CORS policy no 'access-control-allow-origin' error



Warning! Read and use at your own risk!

This script is completely transparent and it passes
all requests and headers without any checking of any kind.
They are simply forwarded.

This is just an easy and convenient solution for the AJAX
cross-domain request issue, during development.
No sanitization of input is made either, so use this only
if you are sure your requests are made correctly and
your urls are valid.
