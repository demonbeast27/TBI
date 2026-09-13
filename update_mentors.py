import re
import os

html_path = r'd:\xampp\htdocs\wordpress\wp-content\themes\rbu-tbi\tbi-theme\assets\images\ECELL COMMITTEE-20260905T095545Z-1-001\mentor\mentor\mentor.html'
css_path = r'd:\xampp\htdocs\wordpress\wp-content\themes\rbu-tbi\tbi-theme\assets\images\ECELL COMMITTEE-20260905T095545Z-1-001\mentor\mentor\mentor.css'
php_path = r'd:\xampp\htdocs\wordpress\wp-content\themes\rbu-tbi\tbi-theme\mentors.php'

with open(html_path, 'r', encoding='utf-8') as f:
    html = f.read()

with open(css_path, 'r', encoding='utf-8') as f:
    css = f.read()

match = re.search(r'<section class="mentor-section">.*?</section>', html, re.DOTALL)
if match:
    section_html = match.group(0)
else:
    section_html = ''

injection = f"<style>\n{css}\n</style>\n{section_html}"

with open(php_path, 'r', encoding='utf-8') as f:
    php = f.read()

# Replace the specific a tag block.
# We will just replace it with the new section HTML.
php_new = re.sub(r'<a\s+href="https://rbunagpur\.in/wp-content/uploads/2025/04/Mentor_Profiles\.pdf"[^>]*>.*?</a>', injection, php, flags=re.DOTALL)

with open(php_path, 'w', encoding='utf-8') as f:
    f.write(php_new)
