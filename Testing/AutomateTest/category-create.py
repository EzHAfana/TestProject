from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.by import By
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.support.ui import WebDriverWait





driver = webdriver.Chrome()
driver.get("http://127.0.0.1:8000/category/create")
category = WebDriverWait(driver,20).until(EC.element_to_be_clickable((By.NAME,'category_name')))
category.send_keys("foo")
clickBtn =  WebDriverWait(driver,20).until(EC.element_to_be_clickable((By.ID,'Create')))
clickBtn.click()
