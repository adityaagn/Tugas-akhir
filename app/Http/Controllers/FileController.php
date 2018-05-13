<?php

namespace App\Http\Controllers;

use App\Campaign;
use App\file;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index($id)
    {
        $title = 'LPJ';
        $campaign_id = $id;
        $files = file::whereCampaignId($id)->get();
        return view('admin.campaign_files', compact('title', 'files', 'campaign_id'));
    }

       public function store(Request $request, $id)
    {
        $rules = [
            'title'                => 'required',
            'description'              => 'required',
            'files'				=>'required|mimes:pdf',
        ];
        $this->validate($request, $rules);

        $user_id = request()->user()->id;


        $data = array_merge(array_except($request->input(), '_token'), [
            'user_id'       => $user_id,
            'campaign_id'   => $id,
        ]);
    	
        $create = file::create($data);

       	if ($request->hasFile('files')){
            $rules = ['files'=>'required|mimes:pdf|max:10000'];
            $this->validate($request, $rules);

            $file = $request->file('files');
            $file_base_name = str_replace('.'.$file->getClientOriginalExtension(), '', $file->getClientOriginalName());


            $file_name = strtolower(time().str_random(5).'-'.str_slug($file_base_name)).'.' . $file->getClientOriginalExtension();

            $upload_dir = public_path('uploads/lpj/');
            if ( ! file_exists($upload_dir)){
                mkdir($upload_dir, 0777, true);
            }
            else {
            	$request->file('files')->move($upload_dir, $file_name);
            }

             try{
                //Uploading thumb

        		$previous_file= $create->filename;
                $create->filename = $file_name;
                $create->save();

                 if ($previous_file){
                    if (file_exists($upload_dir.$previous_file)){
                        unlink($upload_dir.$previous_file);
                    }
                }


            } catch (\Exception $e){
                return $e->getMessage();
            }

            
            

        if ($create){
            return back()->with('success', trans('app.faq_created'));
        }
        return back()->with('error', trans('app.something_went_wrong'))->withInput($request->input());

    	}



	}

	    public function edit($campaign_id, $file_id)
    {
        $user_id = request()->user()->id;
        $title = trans('app.edit_file');
        $file = file::find($file_id);
        if ($campaign_id != $file->campaign_id || $user_id != $file->user_id){
            die(trans('app.unauthorised_access'));
        }
        return view('admin.campaign_file_edit', compact('title', 'file'));

    }

        public function update(Request $request, $campaign_id, $udpate_id)
    {
    	$lpj=file::whereId($udpate_id);
        $rules = [
            'title'                => 'required',
            'description'              => 'required',
        ];
        $this->validate($request, $rules);

        if ($request->hasFile('files')){
            $rules = ['files'=>'mimes:pdf|max:10000'];
            $this->validate($request, $rules);

            $file = $request->file('files');
            $file_base_name = str_replace('.'.$file->getClientOriginalExtension(), '', $file->getClientOriginalName());


            $file_name = strtolower(time().str_random(5).'-'.str_slug($file_base_name)).'.' . $file->getClientOriginalExtension();

            $upload_dir = public_path('uploads/lpj/');
            if ( ! file_exists($upload_dir)){
                mkdir($upload_dir, 0777, true);
            }
            else {
            	$request->file('files')->move($upload_dir, $file_name);
            }

            try{
                //Uploading thumb
            	$lpj2=file::whereId($udpate_id)->first();
                $lpj2->filename = $file_name;
                $lpj2->save();

               


            } catch (\Exception $e){
             	return $e->getMessage();

            }

        /*$files=file::whereId($udpate_id);*/
        $data = array_merge(array_except($request->input(), '_token'));
        $lpj->update($data);

      

        if ($lpj){
            return redirect(route('edit_campaign_files', $campaign_id))->with('success', trans('app.faq_updated'));
        }
        return back()->with('error', trans('app.something_went_wrong'))->withInput($request->input());
    }
}

	public function destroy(File $file, Request $request)
    {
        $user_id = request()->user()->id;
        $data_id = $request->data_id;
        $r = $file::find($data_id);
        if ($r->user_id != $user_id){
            die(trans('app.unauthorised_access'));
        }
        $r->delete();
        return ['success' => 1];
    }


    public function downloadFile($campaign_id,$filename){
		
		$download_dir = public_path('uploads/lpj/',$filename);

    	

    	return response()->download(public_path("uploads/lpj/{$filename}"));
	}
}
