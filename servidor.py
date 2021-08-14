from flask import Flask, request, render_template
app = Flask(__name__, template_folder=".", static_url_path='/static')
 
@app.route('/', methods=['GET', 'POST'])
def index():
    return render_template('/index.html')
@app.route('/form2.html', methods=['GET', 'POST'])
def form2():
    return render_template('form2.html')
@app.route('/form3.html', methods=['GET', 'POST'])
def form3():
    data = request.form
    with open('contacto.txt', 'w') as archivo:
        archivo.write(str(data))
    return render_template('/form3.html')
@app.route('/form4.html', methods=['GET', 'POST'])
def form4():
    return render_template('form4.html')