<?php

namespace App\Http\Controllers;
use ProtoneMedia\Splade\Facades\Toast;
use App\Models\Members;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    //

    public function create(Request $request){


        $validatedData = $request->validate([
            'rollNo' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'dep' => 'required|string|max:255',
            'team' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);
        
        if (!$validatedData) {
            Toast::warning('Error in input format');
            return redirect()->back();
        } else {
            $imageName = time().'.'.$request->image->extension();  
            $path = $request->image->store('member_images', 'public');
           
            Members::create([
                'roll_no' => $validatedData['rollNo'],
                'name' => $validatedData['name'],
                'department' => $validatedData['dep'],
                'team' => $validatedData['team'],
                'role' => $validatedData['role'],
                'image_path' => $path,
            ]);
        
            Toast::success('Member successfully added!');
            return redirect()->route('manageMembers');
        }
    }

    public function update(Request $request){
       
        $validatedData = $request->validate([
            'rollNo' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'dep' => 'required|string|max:255',
            'team' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);
        
        if (!$validatedData) {
            Toast::warning('Error in input format');
            return redirect()->back();
        } else {
            $imageName = time().'.'.$request->image->extension();  
            $path = $request->image->store('member_images', 'public');
            Members::where('id',$request->input('id'))->update([
                'roll_no' => $validatedData['rollNo'],
                'name' => $validatedData['name'],
                'department' => $validatedData['dep'],
                'team' => $validatedData['team'],
                'role' => $validatedData['role'],
                'image_path' => $path,
            ]);
        
            Toast::success('Details successfully updated');
            return redirect()->route('manageMembers');
        }
    }

    public function delete(Request $request, $id)
    {
        Members::destroy($id);
        Toast::success('Details successfully removed');
        return redirect()->route('manageMembers');
    }

    
}
