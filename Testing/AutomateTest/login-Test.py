from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.by import By
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.support.ui import WebDriverWait





driver = webdriver.Chrome()
driver.get("http://localhost:8000/login")
email = WebDriverWait(driver,20).until(EC.element_to_be_clickable((By.NAME,'email')))
email.send_keys("ezafana1@gmail.com")
password = WebDriverWait(driver,20).until(EC.element_to_be_clickable((By.ID,'password')))
password.send_keys("1234567ez*")
clickBtn =  WebDriverWait(driver,20).until(EC.element_to_be_clickable((By.ID,'signin')))
clickBtn.click()
