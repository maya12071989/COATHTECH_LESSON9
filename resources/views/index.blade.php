<style>
  th {
      color: #000;
      padding: 5px;
      float:left;
    }
    
    td {
      text-align: center;
    }
    button {
      padding: 10px;
      background-color: #ddd;
      border: 1px solid #000;
      color: #000;
      border-radius:10px;
      margin-top:10px;
      width:70px;
      font-size:12px;
    }
</style>

<title>トップページ</title>
<form action="/add" method="POST">
  <table>
    @csrf
    <tr>
      <th>
        氏名
      </th>
  </tr>
  <tr>
      <td>
        <input type="text" name="name" value="">
      </td>
  </tr>
   <tr>
      <th>
        メールアドレス
      </th>
      <tr>
      <tr>
      <td>
        <input type="text" name="email" value="">
      </td>
    </tr>
      </table>
    <button>送信する</button>

</form>
