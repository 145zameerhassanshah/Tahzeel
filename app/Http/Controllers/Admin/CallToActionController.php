<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CallToAction;
use App\Models\Group;
use Illuminate\Http\Request;

class CallToActionController extends Controller
{
    public function index()
    {
        $ctas = CallToAction::orderBy('created_at', 'desc')->get();
        return response()->json([
            'data' => $ctas
        ]);
    }
    public function getByPageId($pageId)
    {
        $callToAction = CallToAction::where('page_id', $pageId)->get();
        return response()->json([
            'data' => $callToAction
        ]);
    }
    public function list($id)
    {
        $callToActions = CallToAction::where('group_id', $id)->get();
        $group = Group::find($id);
        return view('admin.call-to-action.list', compact('callToActions', 'id', 'group'));
    }
    public function add($id)
    {
        $group = Group::find($id);
        return view('admin.call-to-action.add', compact('group'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'page_id' => 'required|exists:pages,id',
            'title.en' => 'required|string',
            'title.ar' => 'required|string',
            'subtitle.en' => 'nullable|string',
            'subtitle.ar' => 'nullable|string',
            'button_text.en' => 'required|string',
            'button_text.ar' => 'required|string',
            'button_link' => 'required|url',
            'status' => 'required|in:active,inactive',
        ]);

        // Create new CTA
        $cta = new CallToAction();
        $cta->page_id = $request->page_id;
        
        $cta->setTranslations('title', [
            'en' => $request->title['en'],
            'ar' => $request->title['ar'],
        ]);
        $cta->setTranslations('subtitle', [
            'en' => $request->subtitle['en'],
            'ar' => $request->subtitle['ar'],
        ]);
        $cta->setTranslations('button_text', [
            'en' => $request->button_text['en'],
            'ar' => $request->button_text['ar'],
        ]);

        // // Store multilingual fields
        // $cta->title = json_encode([
        //     'en' => $request->input('title.en'),
        //     'ar' => $request->input('title.ar')
        // ], JSON_UNESCAPED_UNICODE);

        // $cta->subtitle = json_encode([
        //     'en' => $request->input('subtitle.en'),
        //     'ar' => $request->input('subtitle.ar')
        // ], JSON_UNESCAPED_UNICODE);

        // $cta->button_text = json_encode([
        //     'en' => $request->input('button_text.en'),
        //     'ar' => $request->input('button_text.ar')
        // ], JSON_UNESCAPED_UNICODE);

        $cta->button_link = $request->button_link;
        $cta->status = $request->status;
        $cta->save();

        // Return JSON response
        return response()->json([
            'success' => true,
            'cta' => $cta
        ]);
    }

    public function edit($id)
    {
        $cta = CallToAction::findOrFail($id);

        return response()->json([
            'title' => [
                'en' => $cta->getTranslation('title', 'en'),
                'ar' => $cta->getTranslation('title', 'ar'),
            ],
            'subtitle' => [
                'en' => $cta->getTranslation('subtitle', 'en'),
                'ar' => $cta->getTranslation('subtitle', 'ar'),
            ],
            'button_text' => [
                'en' => $cta->getTranslation('button_text', 'en'),
                'ar' => $cta->getTranslation('button_text', 'ar'),
            ],
            // 'title' => json_decode($cta->title),
            // 'subtitle' => json_decode($cta->subtitle),
            // 'button_text' => json_decode($cta->button_text),
            'button_link' => $cta->button_link,
            'status' => $cta->status,
            'page_id' => $cta->page_id
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title.en' => 'required|string',
            'title.ar' => 'required|string',
            'subtitle.en' => 'nullable|string',
            'subtitle.ar' => 'nullable|string',
            'button_text.en' => 'required|string',
            'button_text.ar' => 'required|string',
            'button_link' => 'required|url',
            'status' => 'required|in:active,inactive',
        ]);

        $cta = CallToAction::findOrFail($id);


        $cta->setTranslations('title', [
            'en' => $request->title['en'],
            'ar' => $request->title['ar'],
        ]);
        $cta->setTranslations('subtitle', [
            'en' => $request->subtitle['en'],
            'ar' => $request->subtitle['ar'],
        ]);
        $cta->setTranslations('button_text', [
            'en' => $request->button_text['en'],
            'ar' => $request->button_text['ar'],
        ]);
        

        // Update multilingual fields
        // $cta->title = json_encode([
        //     'en' => $request->input('title.en'),
        //     'ar' => $request->input('title.ar')
        // ], JSON_UNESCAPED_UNICODE);

        // $cta->subtitle = json_encode([
        //     'en' => $request->input('subtitle.en'),
        //     'ar' => $request->input('subtitle.ar')
        // ], JSON_UNESCAPED_UNICODE);

        // $cta->button_text = json_encode([
        //     'en' => $request->input('button_text.en'),
        //     'ar' => $request->input('button_text.ar')
        // ], JSON_UNESCAPED_UNICODE);

        $cta->button_link = $request->button_link;
        $cta->status = $request->status;
        $cta->save();

        return response()->json([
            'success' => true,
            'cta' => $cta
        ]);
    }

    public function destroy($id)
    {
        $cta = CallToAction::findOrFail($id);
        $cta->delete();

        return response()->json([
            'success' => true,
            'message' => 'Call To Action deleted successfully'
        ]);
    }
    // public function index(Request $request)
    // {
    //     $groups = Group::where('type', 'cta')->get();
    //     return view('admin.call-to-action.index', compact('groups'));
    // }
    // Store CallToAction
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'group_id' => 'required|exists:groups,id',
    //         'title' => 'required|max:250',
    //         'subtitle' => 'required|max:250',
    //         'button_text' => 'required|max:250',
    //         'button_link' => 'required|url|max:250',
    //         'status' => 'required',
    //     ]);
    //     $call_to_action = new CallToAction();
    //     $call_to_action->group_id = $request->group_id;
    //     $call_to_action->title = json_encode([
    //         'en' => $request->title,
    //         'ar' => $request->title
    //     ]);
    //     $call_to_action->subtitle = json_encode([
    //         'en' => $request->subtitle,
    //         'ar' => $request->subtitle
    //     ]);
    //     $call_to_action->button_text = json_encode([
    //         'en' => $request->button_text,
    //         'ar' => $request->button_text
    //     ]);
    //     $call_to_action->button_link = $request->button_link;
    //     $call_to_action->status = $request->status;
    //     $call_to_action->save();
    //     $notification = array(
    //         'message' => 'CallToAction Added successfully!',
    //         'alert' => 'success'
    //     );
    //     return redirect()->route('admin.call-to-action.list', ['id' => $call_to_action->group_id])->with('notification', $notification);
    // }
    // Feature Delete
    // public function delete($id)
    // {
    //     $call_to_action = CallToAction::find($id);
    //     $call_to_action->delete();
    //     $notification = array(
    //         'message' => 'CallToAction Deleted successfully!',
    //         'alert' => 'success'    
    //     );
    //     return redirect()->back()->with('notification', $notification);
    // }

    // // Feature Edit
    // public function edit($id)
    // {
    //     $call_to_action = CallToAction::find($id);
    //     return view('admin.call-to-action.edit', compact('call_to_action'));
    // }
    // // Update Feature
    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'title' => 'required|max:250',
    //         'subtitle' => 'required|max:250',
    //         'button_text' => 'required|max:250',
    //         'button_link' => 'required|url|max:250',
    //         'status' => 'required',
    //     ]);
    //     $call_to_action = CallToAction::find($id);
    //     $call_to_action->title = json_encode([
    //         'en' => $request->title,
    //         'ar' => $request->title
    //     ]);
    //     $call_to_action->subtitle = json_encode([
    //         'en' => $request->subtitle,
    //         'ar' => $request->subtitle
    //     ]);
    //     $call_to_action->button_text = json_encode([
    //         'en' => $request->button_text,
    //         'ar' => $request->button_text
    //     ]);
    //     $call_to_action->button_link = $request->button_link;
    //     $call_to_action->status = $request->status;
    //     $call_to_action->save();
    //     $notification = array(
    //         'message' => 'CallToAction Updated successfully!',
    //         'alert' => 'success'
    //     );
    //     return redirect()->route('admin.call-to-action.list', ['id' => $call_to_action->group_id])->with('notification', $notification);
    // }
}
