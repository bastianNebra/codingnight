<?php

namespace App\Http\Controllers;

/**
 * @OA\OpenApi(
 *
 *     @OA\Info(
 *         title="Time Tracking App for Remetra",
 *         version="1.0.0",
 *         description="API Documentation for Time Tracking App for Remetra"
 *     ),
 *
 *     @OA\Server(
 *         url="http://localhost:8000/api",
 *         description="Local server"
 *     ),
 *
 *      @OA\Components(
 *
 *         @OA\SecurityScheme(
 *             securityScheme="bearerAuth",
 *             type="http",
 *             scheme="bearer",
 *             bearerFormat="JWT",
 *             description="JWT Bearer Token Authentication"
 *         )
 *     )
 * )
 */
class apiController extends Controller
{
    /**
     * @OA\Get(
     *     path="/users",
     *     summary="Get list of users",
     *
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation"
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Unauthorized"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Not Found"
     *     )
     * )
     */
    public function getUsers()
    {
        // Your code here
    }

    /**
     * @OA\Get(
     *     path="/get_users",
     *     summary="Get response from API",
     *     tags={"Get all Users from db"},
     *
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *
     *         @OA\JsonContent(
     *             type="object",
     *
     *             @OA\Property(
     *                 property="status",
     *                 type="integer",
     *                 example=200
     *             ),
     *             @OA\Property(
     *                 property="msg",
     *                 type="string",
     *                 example="es funktioniert"
     *             ),
     *             @OA\Property(
     *                 property="_links",
     *                 type="object",
     *                 @OA\Property(
     *                     property="self",
     *                     type="string",
     *                     example="/get_users"
     *                 )
     *             )
     *         )
     *     ),
     *
     *     @OA\Response(
     *         response=401,
     *         description="Unauthorized"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Not Found"
     *     )
     * )
     */
    public function get_User()
    {
        return response()->json([
            'status' => 200,
            'msg' => 'es funktioniert jetzt sehr gut!',

        ]);
    }
}
