_:
	@just --list

# deploy using rsync
deploy:
	rsync -avz --delete \
		app public router.php .htaccess LICENSE \
		contabo:/www/wwwroot/btek.cc/


# Run the development server
dev:
	php -t public -S localhost:8000 router.php