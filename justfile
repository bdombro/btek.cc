_:
	@just --list

# Run the development server
dev:
	php -t public -S localhost:8000 router.php