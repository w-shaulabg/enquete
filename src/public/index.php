<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>アンケートフォーム</title>
  <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

  <section class="text-gray-600 body-font relative">

    <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col w-full md:py-8 mt-8 md:mt-0">
      <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">アンケートフォーム</h2>
      <form action="complete.php" method="post">
        <div class="relative mb-4">
          <label for="name" class="leading-7 text-sm text-gray-600">回答者名</label>
          <input type="name" id="name" name="name" placeholder="回答者名"
            class="w-full bg-white rounded border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
          <label for="food_answer" class="leading-7 text-sm text-gray-600">好きな食べ物</label>
          <input type="food_answer" id="food_answer" name="food_answer" placeholder="好きな食べ物"
            class="w-full bg-white rounded border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
          <label for="hobby_answer" class="leading-7 text-sm text-gray-600">趣味をご記入ください</label>
          <input type="hobby_answer" id="hobby_answer" name="hobby_answer" placeholder="趣味"
            class="w-full bg-white rounded border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <button
          class="text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded text-lg">送信</button>
      </form>
    </div>
    </div>
  </section>
</body>

</html>