<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

class AuthController extends Controller
{
    /**
     * @OA\Post(
     *     path="/login",
     *     operationId="post_login",
     *     tags={"auth"},
     *     summary="ログイン",
     *     description="ログイン処理",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             type="object",
     *             required={"email", "password"},
     *             @OA\Property(
     *                 property="email",
     *                 type="string",
     *                 example="hoge@hoge.com",
     *                 description="メールアドレス"
     *             ),
     *             @OA\Property(
     *                 property="password",
     *                 type="string",
     *                 example="password",
     *                 description="パスワード"
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="成功",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="access_token",
     *                 type="string",
     *                 description="アクセストークン",
     *                 example="1:xxxxxx"
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Unauthorized",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="message",
     *                 type="string",
     *                 description="認証エラー"
     *             )
     *         )
     *     )
     * )
     */
    public function login(LoginRequest $request)
    {
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }

        $accessToken = Auth::user()->createToken('authToken')->plainTextToken;
        return response()->json([
            'access_token' => $accessToken,
        ]);
    }
}
