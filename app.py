from flask import Flask, render_template, send_file
import qrcode
import os

app = Flask(__name__)

# Your bank details
account_number = "55530100004088"
ifsc_code = "BARB0GUMIAX"
account_name = "Nilesh Ranjan"

# Generate a QR code with bank details (account number, IFSC code)
def generate_bank_qr():
    qr_data = f"Account Number: {account_number}\nIFSC Code: {ifsc_code}\nAccount Holder: {account_name}"
    qr_img = qrcode.make(qr_data)
    qr_path = os.path.join("static", "qrcode.png")
    qr_img.save(qr_path)
    return qr_path

@app.route('/')
def index():
    # Generate the QR code before rendering the homepage
    qr_path = generate_bank_qr()
    return render_template('index.html', qr_code=qr_path)

if __name__ == '__main__':
    app.run(debug=True)
