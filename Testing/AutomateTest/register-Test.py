from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.by import By
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.support.ui import WebDriverWait






driver = webdriver.Chrome()
driver.get("http://127.0.0.1:8000/register")
email = WebDriverWait(driver,20).until(EC.element_to_be_clickable((By.NAME,'name')))
email.send_keys("ez")
email = WebDriverWait(driver,20).until(EC.element_to_be_clickable((By.NAME,'email')))
email.send_keys("ezaf@gmail.com")
password = WebDriverWait(driver,20).until(EC.element_to_be_clickable((By.ID,'password')))
password.send_keys("123ezaf*")
Confirm_Password = WebDriverWait(driver,20).until(EC.element_to_be_clickable((By.ID,'password-confirm')))
Confirm_Password.send_keys("123ezaf*")
clickBtn = WebDriverWait(driver,20).until(EC.element_to_be_clickable((By.ID,'signup')))
clickBtn.click()
